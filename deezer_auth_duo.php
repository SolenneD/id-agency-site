<?php
$mode = $_GET['mode'];
session_start();

include('config/settings.php');


$app_id      = "285824" ;
$app_secret = "f2e788afd7405bcd51b983299db4263d" ;
$my_url      = "http://paceme.fr/deezer_auth_duo.php" ;
//$my_url      = "http://". $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];




$code = $_REQUEST["code"];

if(empty($code)){
    $unique_state = md5(uniqid(rand(), TRUE)); //CSRF protection
// print_r($_SESSION);
    $_SESSION['state'] = $unique_state; //CSRF protection
    $dialog_url = "https://connect.deezer.com/oauth/auth.php?app_id=".$app_id
        ."&redirect_uri=".urlencode($my_url)."&perms=email,offline_access"
        ."&state=". $unique_state;

//    echo ($dialog_url);
//die;
    header("Location: ".$dialog_url);
    exit;

}

//print_r ($_GET);
//echo ("//SESSION : ");
//print_r($mode);
//die;


$_SESSION['state'] = $_REQUEST['state'];



if($_REQUEST['state'] == $_SESSION['state']) {
    $token_url = "https://connect.deezer.com/oauth/access_token.php?app_id="
        .$app_id."&secret="
        .$app_secret."&code=".$code;

    $response  = file_get_contents($token_url);
    $params    = null;
    parse_str($response, $params);
    $api_url   = "https://api.deezer.com/user/me?access_token="
        .$params['access_token'];

    $_SESSION['deezer_access_token'] = $params['access_token'];
    $user = json_decode(file_get_contents($api_url));
    //echo("Hello " . $mode);
    redirect('duo.php');

}else{
    echo("The state does not match. You may be a victim of CSRF.");
}


?>


<!DOCTYPE html>
<html>
<head>
    <title>deezer</title>
</head>
<body>




</body>
</html>