<?php
include"../config/settings.php";

$bpm = $_POST['clic']*6;

$resultats = array();

$c_91 = 91;
$c_90 = 90;
$c_101 = 101;
$c_100 = 100;
$c_111 = 111;
$c_110 = 110;
$c_121 = 121;
$c_120 = 120;
$c_131 = 131;
$c_130 = 130;
$c_141 = 141;
$c_140 = 140;
$c_151 = 151;
$c_150 = 150;
$c_161 = 161;
$c_160 = 160;
$c_171 = 171;
$c_170 = 170;


if($bpm < 91 ){
    $horoscope = $db->prepare('SELECT * FROM deezer WHERE bpm < :i');
    $horoscope->bindParam(':i', $c_90, PDO::PARAM_STR);
    $horoscope->execute();
    while($data = $horoscope->fetch(PDO::FETCH_ASSOC)){
        array_push($resultats, $data['id_deezer']);
    }
}
if(90 < $bpm && $bpm < 101){
    $horoscope = $db->prepare('SELECT * FROM deezer WHERE :a < bpm AND bpm < :i');
    $horoscope->bindParam(':a', $c_90, PDO::PARAM_STR);
    $horoscope->bindParam(':i', $c_100, PDO::PARAM_STR);
    $horoscope->execute();
    while($data = $horoscope->fetch(PDO::FETCH_ASSOC)){
        array_push($resultats, $data['id_deezer']);
    }
}
if(100 < $bpm && $bpm < 111){
    $horoscope = $db->prepare('SELECT * FROM deezer WHERE :a < bpm AND bpm < :i');
    $horoscope->bindParam(':a', $c_100, PDO::PARAM_STR);
    $horoscope->bindParam(':i', $c_110, PDO::PARAM_STR);
    $horoscope->execute();
    while($data = $horoscope->fetch(PDO::FETCH_ASSOC)){
        array_push($resultats, $data['id_deezer']);
    }
}
if(110 < $bpm && $bpm < 121){
    $horoscope = $db->prepare('SELECT * FROM deezer WHERE :a < bpm AND bpm < :i');
    $horoscope->bindParam(':a', $c_110, PDO::PARAM_STR);
    $horoscope->bindParam(':i', $c_121, PDO::PARAM_STR);
    $horoscope->execute();
    while($data = $horoscope->fetch(PDO::FETCH_ASSOC)){
        array_push($resultats, $data['id_deezer']);
    }
}
if(120 < $bpm && $bpm < 131){
    $horoscope = $db->prepare('SELECT * FROM deezer WHERE :a < bpm AND bpm < :i');
    $horoscope->bindParam(':a', $c_121, PDO::PARAM_STR);
    $horoscope->bindParam(':i', $c_130, PDO::PARAM_STR);
    $horoscope->execute();
    while($data = $horoscope->fetch(PDO::FETCH_ASSOC)){
        array_push($resultats, $data['id_deezer']);
    }
}
if(130 < $bpm && $bpm < 141){
    $horoscope = $db->prepare('SELECT * FROM deezer WHERE :a < bpm AND bpm < :i');
    $horoscope->bindParam(':a', $c_130, PDO::PARAM_STR);
    $horoscope->bindParam(':i', $c_140, PDO::PARAM_STR);
    $horoscope->execute();
    while($data = $horoscope->fetch(PDO::FETCH_ASSOC)){
        array_push($resultats, $data['id_deezer']);
    }
}
if(140 < $bpm && $bpm < 151){
    $horoscope = $db->prepare('SELECT * FROM deezer WHERE :a < bpm AND bpm < :i');
    $horoscope->bindParam(':a', $c_140, PDO::PARAM_STR);
    $horoscope->bindParam(':i', $c_150, PDO::PARAM_STR);
    $horoscope->execute();
    while($data = $horoscope->fetch(PDO::FETCH_ASSOC)){
        array_push($resultats, $data['id_deezer']);
    }
}
if(150 < $bpm && $bpm < 161){
    $horoscope = $db->prepare('SELECT * FROM deezer WHERE :a < bpm AND bpm < :i');
    $horoscope->bindParam(':a', $c_150, PDO::PARAM_STR);
    $horoscope->bindParam(':i', $c_160, PDO::PARAM_STR);
    $horoscope->execute();
    while($data = $horoscope->fetch(PDO::FETCH_ASSOC)){
        array_push($resultats, $data['id_deezer']);
    }
}
if(160 < $bpm && $bpm < 171){
    $horoscope = $db->prepare('SELECT * FROM deezer WHERE :a < bpm AND bpm < :i');
    $horoscope->bindParam(':a', $c_160, PDO::PARAM_STR);
    $horoscope->bindParam(':i', $c_170, PDO::PARAM_STR);
    $horoscope->execute();
    while($data = $horoscope->fetch(PDO::FETCH_ASSOC)){
        array_push($resultats, $data['id_deezer']);
    }
}
if(170 < $bpm){
    $horoscope = $db->prepare('SELECT * FROM deezer WHERE :a < bpm');
    $horoscope->bindParam(':a', $c_170, PDO::PARAM_STR);
    $horoscope->execute();
    while($data = $horoscope->fetch(PDO::FETCH_ASSOC)){
        array_push($resultats, $data['id_deezer']);
    }
}

$resultat = array_rand($resultats);
$resultatFinal = $resultats[$resultat];

session_start();

$deezer_url = "https://api.deezer.com/track/".$resultatFinal."?access_token=". $_SESSION['deezer_access_token'];
$response = json_decode(file_get_contents($deezer_url));
$url = $response->{'preview'};
//$url = $response->{'data'}[0]->{'preview'};


echo $url;
