<?php


if(empty($_POST))
    //on redirige vers le formulire
    redirect('../index.php');
//sinon (on a reçu des donnes)
else{

    $error = false;

    //si l'email est vide
    if(empty($_POST['email'])){
        //on déclenche une erreur
        $error = true;
        //on crée un message d'erreur
        //flash_in('error', 'L'email est obligatoire');
    }
}

//si on a vu au moins une erreur
if($error)
    //on redirige vers le formulaire
    redirect('../index.php');
//sinon
else{
    if(isset($_POST['newsletter'])){
        //on crée une requete qui ajoute dans la base
        $add = $db->prepare('INSERT INTO email (created, updated, email) VALUES ( NOW(), NOW(), :e)');
        //on ajoute les données du formulaire
        $add->bindParam(':e', $_POST['email'], PDO::PARAM_STR);

        //on execute la requete
        $add->execute();
    }








//-----------------------------------------------
//DECLARE LES VARIABLES
//-----------------------------------------------

$expediteur = $_POST['name'];
$email_expediteur = $_POST['email'];
$message = $_POST['message'];
$sujet = 'Nouveau message sur le site www.paceme.fr';


$destinataire='pacemecontact@gmail.com';
$message_texte='Bonjour. '.$expediteur.' vous a envoyé un message : "'.$message.'". Adresse de réponse : '.$email_expediteur.'.';

$message_html='<html> 
     <head> 
     <title>Message provenant du site www.Hugodecraene.fr</title> 
     </head> 
     <body>
     	<p>Bonjour.</p>
     	
     	<p>'.$expediteur.' vous a envoyé un message :</p>
     	
     	<p>'.$message.'</p>
     	
     	<p>Adresse de réponse : '.$email_expediteur.'</p>
     	
        
     	
     </body> 
     </html>';

//-----------------------------------------------
//GENERE LA FRONTIERE DU MAIL ENTRE TEXTE ET HTML
//-----------------------------------------------

$frontiere = '-----=' . md5(uniqid(mt_rand()));

//-----------------------------------------------
//HEADERS DU MAIL
//-----------------------------------------------

$headers = 'From: "Nom" <'.$email_expediteur.'>'."\n";
$headers .= 'Return-Path: <'.$email_expediteur.'>'."\n";
$headers .= 'MIME-Version: 1.0'."\n";
$headers .= 'Content-Type: multipart/mixed; boundary="'.$frontiere.'"';

//-----------------------------------------------
//MESSAGE TEXTE
//-----------------------------------------------
$message = 'This is a multi-part message in MIME format.'."\n\n";

$message .= '--'.$frontiere."\n";
$message .= 'Content-Type: text/plain; charset="iso-8859-1"'."\n";
$message .= 'Content-Transfer-Encoding: 8bit'."\n\n";
$message .= $message_texte."\n\n";

//-----------------------------------------------
//MESSAGE HTML
//-----------------------------------------------
$message .= '--'.$frontiere."\n";

$message .= 'Content-Type: text/html; charset="iso-8859-1"'."\n";
$message .= 'Content-Transfer-Encoding: 8bit'."\n\n";
$message .= $message_html."\n\n";

$message .= '--'.$frontiere."\n";

mail($destinataire,$sujet,$message,$headers);



header('Location: contact.php');

}
