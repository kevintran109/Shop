<?php
    session_start();
    include __DIR__."\server\config.php";
    include __DIR__."\model\model.php";
    /* Set App ID, App Secret & Redirect URL */
    $app_id = "145478836139756";
    $app_secret = "c6529baacfda43245c909aee66e2d574";
    $redirect_uri = urlencode("https://localhost/shop/login.php");
    /* Get Code From Login App */
    $code = $_GET['code'];
    $data = json_decode(request("https://graph.facebook.com/v2.8/oauth/access_token?client_id=$app_id&redirect_uri=$redirect_uri&client_secret=$app_secret&code=$code"),TRUE);  
    /* Curl to get data   */
    function request($url)
    {
        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.87 Safari/537.36',
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_SSL_VERIFYHOST => 2,
            CURLOPT_HEADER => 0
        ]);
        return $response = curl_exec($ch);
    }
    /* Get data User */
    $accessToken = $data['access_token'];
    $getUserData = json_decode(request("https://graph.facebook.com/me?access_token=$accessToken"),TRUE);
    $_SESSION['id'] =  $getUserData['id'];
    $_SESSION['fullname'] = $getUserData['name'];
    $data = new Model();
    $data->user($getUserData['id']);
?>