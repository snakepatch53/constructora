<?php

// $FB_APP_ID = "3137191796580899";
// $FB_APP_SECRET = "275f9e71824c74504027d196136637f8";
// $FB_GRAPH_VERSION = "v16.0";
// $FB_PAGE_ID = "453395385426480";
// $FB_ACCESS_TOKEN = "EAAslQmKgoiMBAOE6392KHZAa1jhFvDLV4ZBstzZBeiFwasHX3tfq7kYtGcgtZCnbzPbxxROU2ZCVdTeJ0YniXZCMZAZBrZA51S6my7gRZBLYxeZARZC2AcVKZC23hPT6ykJHfdDCRBXr1Exwj7sBF1rBWR3ZAmsTbX9NDpiIHlVRSffvgmP24UV4jTzyWHvSH9QGZBrf3H6ZC9bA5gZB9eQ8m5OqYcrnN";
// // $FB_PATH_REQUEST = '/453395385426480?fields=posts{full_picture,permalink_url,message}';
// $FB_PATH_REQUEST = "https://graph.facebook.com/v16.0/$FB_PAGE_ID/posts?fields=full_picture,permalink_url,message";


// $fb = new \Facebook\Facebook([
//     'app_id' => $FB_APP_ID,
//     'app_secret' => $FB_APP_SECRET,
//     'default_graph_version' => $FB_GRAPH_VERSION
// ]);

// $response = $fb->get($FB_PATH_REQUEST, $FB_ACCESS_TOKEN);
// try {
//     $response = $fb->get($FB_PATH_REQUEST, $FB_ACCESS_TOKEN);
// } catch (\Facebook\Exception\FacebookResponseException $e) {
//     echo 'Graph returned an error: ' . $e->getMessage();
//     exit;
// } catch (\Facebook\Exception\FacebookSDKException $e) {
//     echo 'Facebook SDK returned an error: ' . $e->getMessage();
//     exit;
// }

// $data = $response->getDecodedBody();





$CURL_REQUEST = "https://graph.facebook.com/v16.0/453395385426480?fields=posts%7Bfull_picture%2Cpermalink_url%2Cmessage%7D&access_token=EAAslQmKgoiMBAFf3ZCQ053IjIxAVklyAsVGu48kxdFT6nPWOwUm6d5ZAxO38YTqTY1PL5Qwl5xTAT1ywqVjoLiUSsLqgTL30YN6u9SIFvax7AZA5RBlqIgx5DlKmnd3vJCVjXw8r44VX3sIj7ZCMF7IZCu2JKkYpXdIiAnFsVtYNqOHgInPrOltPYBy3yZBYya3nGD7KyOX1hiZCIMkw4UV";

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => $CURL_REQUEST,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    // CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    // CURLOPT_POSTFIELDS => array(
    //     'fields' => 'posts{full_picture,permalink_url,message}',
    //     'access_token' => $FB_ACCESS_TOKEN
    // ),
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