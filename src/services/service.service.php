<?php
class ServiceService
{

    public static function select($DATA)
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        $adapter = $DATA['mysqlAdapter'];
        $serviceDao = new ServiceDao($adapter);
        $services = $serviceDao->select();
        echo json_encode([
            'status' => 'success',
            'message' => 'Services obtained successfully',
            'response' => true,
            'data' => $services
        ]);
    }

    public static function select_join_projects($DATA)
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        $adapter = $DATA['mysqlAdapter'];
        $serviceDao = new ServiceDao($adapter);
        $services = $serviceDao->select_join_projects();
        echo json_encode([
            'status' => 'success',
            'message' => 'Services obtained successfully',
            'response' => true,
            'data' => $services
        ]);
    }

    // public static function insert($DATA)
    // {
    //     header('Content-Type: application/json');
    //     header('Access-Control-Allow-Origin: *');
    //     $adapter = $DATA['mysqlAdapter'];
    //     $result = [
    //         'status' => 'error',
    //         'message' => 'Data not found',
    //         'response' => false,
    //         'data' => null
    //     ];
    //     if (isset(
    //         $_POST['user_name'],
    //         $_POST['user_user'],
    //         $_POST['user_pass']
    //     )) {
    //         $userDao = new UserDao($adapter);
    //         $user_name = $_POST['user_name'];
    //         $user_user = $_POST['user_user'];
    //         $user_pass = $_POST['user_pass'];
    //         $user_photo = "default.png";
    //         if (isset($_FILES['user_photo'])) {
    //             if ($_FILES['user_photo']['tmp_name'] != "" or $_FILES['user_photo']['tmp_name'] != null) {
    //                 $user_photo = uploadFIle($_FILES['user_photo'], './public/img.users/');
    //             }
    //         };
    //         $user = $userDao->insert(
    //             $user_name,
    //             $user_user,
    //             $user_pass,
    //             $user_photo
    //         );
    //         $result['status'] = 'success';
    //         $result['message'] = 'User created successfully';
    //         $result['response'] = true;
    //         $result['data'] = $user;
    //     }
    //     echo json_encode($result);
    // }

    // public static function update($DATA)
    // {
    //     header('Content-Type: application/json');
    //     header('Access-Control-Allow-Origin: *');
    //     $adapter = $DATA['mysqlAdapter'];
    //     $result = [
    //         'status' => 'error',
    //         'message' => 'Data not found',
    //         'response' => false,
    //         'data' => null
    //     ];
    //     if (isset(
    //         $_POST['user_name'],
    //         $_POST['user_user'],
    //         $_POST['user_pass'],
    //         $_POST['user_id']
    //     )) {
    //         $userDao = new UserDao($adapter);

    //         $user_id = $_POST['user_id'];
    //         $current_user = $userDao->selectById($user_id);
    //         if (!$current_user) {
    //             $result['message'] = 'User not found';
    //             echo json_encode($result);
    //             exit();
    //         }

    //         $user_name = $_POST['user_name'];
    //         $user_user = $_POST['user_user'];
    //         $user_pass = $_POST['user_pass'];
    //         $user_id = $_POST['user_id'];
    //         $user_photo = $current_user['user_photo'];
    //         if (isset($_FILES['user_photo'])) {
    //             if ($_FILES['user_photo']['tmp_name'] != "" or $_FILES['user_photo']['tmp_name'] != null) {
    //                 if ($user_photo != 'default.png' && $user_photo != '') deleteFile('./public/img.users/' . $user_photo);
    //                 $user_photo = uploadFIle($_FILES['user_photo'], './public/img.users/');
    //             }
    //         }
    //         $user = $userDao->update(
    //             $user_name,
    //             $user_user,
    //             $user_pass,
    //             $user_photo,
    //             $user_id
    //         );
    //         $result['status'] = 'success';
    //         $result['message'] = 'User updated successfully';
    //         $result['response'] = true;
    //         $result['data'] = $user;
    //     }
    //     echo json_encode($result);
    // }

    // public static function delete($DATA)
    // {
    //     header('Content-Type: application/json');
    //     header('Access-Control-Allow-Origin: *');
    //     $adapter = $DATA['mysqlAdapter'];
    //     $result = [
    //         'status' => 'error',
    //         'message' => 'Data not found',
    //         'response' => false,
    //         'data' => null
    //     ];
    //     if (isset($_POST['user_id'])) {
    //         $userDao = new UserDao($adapter);
    //         $user_id = $_POST['user_id'];
    //         $user = $userDao->selectById($user_id);
    //         if (!$user) {
    //             $result['message'] = 'User not found';
    //             echo json_encode($result);
    //             exit();
    //         }
    //         if ($user['user_photo'] != 'default.png' && $user['user_photo'] != '') {
    //             deleteFile('./public/img.users/' . $user['user_photo']);
    //         }
    //         $userDao->delete($user_id);
    //         $result['status'] = 'success';
    //         $result['message'] = 'User deleted successfully';
    //         $result['response'] = true;
    //     }
    //     echo json_encode($result);
    // }
}
