<?php
/**
 * Created by PhpStorm.
 * User: solennedaguerre
 * Date: 30/06/2018
 * Time: 23:13
 */

include('../config/settings.php');
if(isset($_GET["couleur"]) && isset($_GET["ornement"])) {
    $bague = $db->prepare('SELECT * FROM costum WHERE :b = couleur AND :a = ornement');

    $bague->bindParam(':b', $_GET["couleur"], PDO::PARAM_STR);
    $bague->bindParam(':a', $_GET["ornement"], PDO::PARAM_STR);
    $bague->execute();
    $data = $bague->fetch(PDO::FETCH_ASSOC);
    $image = $data['sources'];
}