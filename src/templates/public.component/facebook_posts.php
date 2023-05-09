<?php
// $fb = new \Facebook\Facebook([
//     'app_id' => $_ENV['FB_APP_ID'],
//     'app_secret' => $_ENV['FB_APP_SECRET'],
//     'default_graph_version' => $_ENV['FB_GRAPH_VERSION'],
// ]);

// try {
//     $response = $fb->get($_ENV['FB_PATH_REQUEST'], $_ENV['FB_ACCESS_TOKEN']);
// } catch (\Facebook\Exception\FacebookResponseException $e) {
//     echo 'Graph returned an error: ' . $e->getMessage();
//     exit;
// } catch (\Facebook\Exception\FacebookSDKException $e) {
//     echo 'Facebook SDK returned an error: ' . $e->getMessage();
//     exit;
// }

// $data = $response->getDecodedBody();


$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => $_ENV['FB_HTTP_REQUEST'],
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET"
));

$response = curl_exec($curl);

curl_close($curl);

$posts = json_decode($response, true)['posts']['data'];
?>


<div class="container">
    <div class="title">
        <h2>Publicaciones de nuestra pagina de Facebook</h2>
        <p>Estas son las publicaciones de nuestra pagina de Facebook</p>
    </div>
    <div class="items">
        <?php
        foreach ($posts as $post) {
            $full_picture = $post['full_picture'] ?? '';
            $permalink_url = $post['permalink_url'] ?? '';
            $message = $post['message'] ?? '';
            if (!$full_picture && !$message) continue;
        ?>
            <div class="item">
                <?php if ($full_picture) { ?>
                    <img src="<?= $full_picture ?>" alt="Imagen de publicacion de Facebook">
                <?php } ?>
                <?php if ($message) { ?>
                    <p><?= $message ?></p>
                <?php } ?>
                <a href="<?= $permalink_url ?>" target="_blank">Ver publicación</a>
            </div>
        <?php } ?>
    </div>
</div>