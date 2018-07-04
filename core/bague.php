<?php

include('../config/settings.php');

    $bague = $db->prepare('SELECT * FROM costum WHERE :b = couleur AND :a = ornement');

    $bague->bindParam(':b', $_POST["couleur"], PDO::PARAM_STR);
    $bague->bindParam(':a', $_POST["ornement"], PDO::PARAM_STR);

    $bague->execute();

    $data = $bague->fetch(PDO::FETCH_ASSOC);
    echo $data['sources'];