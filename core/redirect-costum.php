<?php
//on importe le fichier setting
include('../config/settings.php');

//si on n'a pas reçu de formulaire
if(empty($_POST))
    //on redirige vers le formulire
    redirect('../labague-custom.php');
//sinon (on a reçu des donnes)
else{
    $error = false;
}



//si on a vu au moins une erreur
if($error)
    //on redirige vers le formulaire
    redirect('../404.php');
//sinon
else{

    //on crée une requete qui ajoute dans la base
    $add = $db->prepare('INSERT INTO bague (created, updated, gravure, fonctionnalite) VALUES ( NOW(), NOW(), :e, :f)');
    //on ajoute les données du formulaire
    $add->bindParam(':e', $_POST['gravure'], PDO::PARAM_STR);
    $add->bindParam(':f', $_POST['fonctionnalite'], PDO::PARAM_STR);

    //on execute la requete
    $add->execute();


    //flash_in('success', "L'email a été ajouté");
    redirect('../labague-confirmation.php');

}
