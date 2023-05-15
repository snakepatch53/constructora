<?php
class ProjectService
{

    public static function select($DATA)
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        $adapter = $DATA['mysqlAdapter'];
        $projectDao = new ProjectDao($adapter);
        $projects = $projectDao->select();
        echo json_encode([
            'status' => 'success',
            'message' => 'Projects obtained successfully',
            'response' => true,
            'data' => $projects
        ]);
    }

    public static function update_from_facebook($DATA, $app_token, $token_renew_threshold)
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        $result = [
            'status' => 'error',
            'message' => "You're not authorized to access this resource",
            'response' => false,
            'data' => null,
            'fb_token_expire' => null,
            'inserts' => null
        ];
        if ($_ENV['APP_ACCESS_TOKEN'] != $app_token) {
            echo json_encode($result);
            exit();
        }
        $adapter = $DATA['mysqlAdapter'];
        $infoDao = new InfoDao($adapter);
        $serviceDao = new ServiceDao($adapter);
        $projectDao = new ProjectDao($adapter);
        $info = $infoDao->select();
        // creamos el adaptador para obtener los posts de facebook con las credenciales desde la base de datos
        // TODO: descomentar en produccion
        $fbSDKAdapter = new FacebookSDKAdapter(
            $info['info_fb_app_id'],
            $info['info_fb_app_secret'],
            $info['info_fb_access_token'],
            $info['info_fb_page_id']
        );
        $facebook_result = $fbSDKAdapter->getPosts($token_renew_threshold, fn ($v) => $infoDao->updateFacebookAccessToken($v));
        // $facebook_result = json_decode(file_get_contents('./src/mooks/facebook_posts.json'), true); // ! TESTS

        if ($facebook_result == null) {
            $result['message'] = 'could not get posts';
            echo json_encode($result);
            exit();
        }
        // Extraemos los servicios para hacer match con los posts y asi guardar las fk correspondiente de cada project
        $services = $serviceDao->select();
        // borramos todas las publicaciones en la base de datos de projects
        $projectDao->deleteFacebookPosts();
        // insertamos las nuevas publicaciones en la base de datos de projects
        $values = [];
        $posts_filtered = [];
        foreach ($facebook_result['posts'] as $post) {
            $desc = $post['desc'];
            $img = $post['img'];
            $url = $post['url'];
            $title = '';
            $service_id = 0;
            foreach ($services as $service) {
                $compare1 = strToLower($desc);
                $compare2 = strToLower("#" . str_replace(' ', '', $service['service_title']));
                if (strpos($compare1, $compare2) !== false) {
                    $title = "Project of '" . trim($service['service_title']) . "'";
                    $service_id = $service['service_id'];
                    break;
                }
            }
            if ($service_id == 0) continue;
            $value = [$title, $desc, $img, $url, 'facebook', $service_id];
            $posts_filtered[] = $value;
            $values[] = $value;
        }

        $response_inserts = $projectDao->inserts(
            [
                'project_title',
                'project_desc',
                'project_img',
                'project_link',
                'project_origin',
                'service_id'
            ],
            $values
        );

        $result['status'] = 'success';
        $result['message'] = 'Posts obtained successfully';
        $result['response'] = true;
        $result['data'] = $posts_filtered;
        $result['inserts'] = $response_inserts;
        $result['fb_token_expire'] = $facebook_result['expire_in'];
        echo json_encode($result);
    }
}
