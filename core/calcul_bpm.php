<?php
include"../config/settings.php";

$bpm = $_POST['clic']*6;

$resultats = array();

if($bpm < 91 ){
    $horoscope = $db->prepare('SELECT * FROM deezer WHERE bpm < :i');
    $horoscope->bindParam(':i', 90, PDO::PARAM_STR);
    $horoscope->execute();
    while($data = $horoscope->fetch(PDO::FETCH_ASSOC)){
        array_push($resultats, $data['id_deezer']);
    }
}
if(90 < $bpm && $bpm < 101){
    $horoscope = $db->prepare('SELECT * FROM deezer WHERE :a < bpm < :i');
    $horoscope->bindParam(':a', 90, PDO::PARAM_STR);
    $horoscope->bindParam(':i', 100, PDO::PARAM_STR);
    $horoscope->execute();
    while($data = $horoscope->fetch(PDO::FETCH_ASSOC)){
        array_push($resultats, $data['id_deezer']);
    }
}
if(100 < $bpm && $bpm < 111){
    $horoscope = $db->prepare('SELECT * FROM deezer WHERE :a < bpm < :i');
    $horoscope->bindParam(':a', 100, PDO::PARAM_STR);
    $horoscope->bindParam(':i', 110, PDO::PARAM_STR);
    $horoscope->execute();
    while($data = $horoscope->fetch(PDO::FETCH_ASSOC)){
        array_push($resultats, $data['id_deezer']);
    }
}
if(110 < $bpm && $bpm < 121){
    $horoscope = $db->prepare('SELECT * FROM deezer WHERE :a < bpm < :i');
    $horoscope->bindParam(':a', 110, PDO::PARAM_STR);
    $horoscope->bindParam(':i', 120, PDO::PARAM_STR);
    $horoscope->execute();
    while($data = $horoscope->fetch(PDO::FETCH_ASSOC)){
        array_push($resultats, $data['id_deezer']);
    }
}
if(120 < $bpm && $bpm < 131){
    $horoscope = $db->prepare('SELECT * FROM deezer WHERE :a < bpm < :i');
    $horoscope->bindParam(':a', 120, PDO::PARAM_STR);
    $horoscope->bindParam(':i', 130, PDO::PARAM_STR);
    $horoscope->execute();
    while($data = $horoscope->fetch(PDO::FETCH_ASSOC)){
        array_push($resultats, $data['id_deezer']);
    }
}
if(130 < $bpm && $bpm < 141){
    $horoscope = $db->prepare('SELECT * FROM deezer WHERE :a < bpm < :i');
    $horoscope->bindParam(':a', 130, PDO::PARAM_STR);
    $horoscope->bindParam(':i', 140, PDO::PARAM_STR);
    $horoscope->execute();
    while($data = $horoscope->fetch(PDO::FETCH_ASSOC)){
        array_push($resultats, $data['id_deezer']);
    }
}
if(140 < $bpm && $bpm < 151){
    $horoscope = $db->prepare('SELECT * FROM deezer WHERE :a < bpm < :i');
    $horoscope->bindParam(':a', 140, PDO::PARAM_STR);
    $horoscope->bindParam(':i', 150, PDO::PARAM_STR);
    $horoscope->execute();
    while($data = $horoscope->fetch(PDO::FETCH_ASSOC)){
        array_push($resultats, $data['id_deezer']);
    }
}
if(150 < $bpm && $bpm < 161){
    $horoscope = $db->prepare('SELECT * FROM deezer WHERE :a < bpm < :i');
    $horoscope->bindParam(':a', 150, PDO::PARAM_STR);
    $horoscope->bindParam(':i', 160, PDO::PARAM_STR);
    $horoscope->execute();
    while($data = $horoscope->fetch(PDO::FETCH_ASSOC)){
        array_push($resultats, $data['id_deezer']);
    }
}
if(160 < $bpm && $bpm < 171){
    $horoscope = $db->prepare('SELECT * FROM deezer WHERE :a < bpm < :i');
    $horoscope->bindParam(':a', 160, PDO::PARAM_STR);
    $horoscope->bindParam(':i', 170, PDO::PARAM_STR);
    $horoscope->execute();
    while($data = $horoscope->fetch(PDO::FETCH_ASSOC)){
        array_push($resultats, $data['id_deezer']);
    }
}
if(170 < $bpm){
    $horoscope = $db->prepare('SELECT * FROM deezer WHERE :a < bpm');
    $horoscope->bindParam(':a', 170, PDO::PARAM_STR);
    $horoscope->execute();
    while($data = $horoscope->fetch(PDO::FETCH_ASSOC)){
        array_push($resultats, $data['id_deezer']);
    }
}

$resultat = array_rand($resultats);

session_start();

$deezer_url = "https://api.deezer.com/track/'.$resultat.'?access_token=". $_SESSION['deezer_access_token'];
$response = json_decode(file_get_contents($deezer_url));
$url = $response->{'preview'};
//$url = $response->{'preview'}[1]->{'name'};


echo $url;

