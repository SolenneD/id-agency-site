<?php
//on importe le fichier setting
include('../config/settings.php');

session_start();

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
    redirect('../index.php');
//sinon
else{

    //on crée une requete qui ajoute dans la base
    $add = $db->prepare('INSERT INTO bague (created, updated, gravure, fonctionnalite, choix, imagebague, email, taille) VALUES ( NOW(), NOW(), :e, :f, :c, :i, :m, :s)');
    //on ajoute les données du formulaire
    $add->bindParam(':e', $_POST['gravure'], PDO::PARAM_STR);
    $add->bindParam(':f', $_POST['fonctionnalite'], PDO::PARAM_STR);
    $add->bindParam(':c', $_POST['choix'], PDO::PARAM_STR);
    $add->bindParam(':i', $_POST['image'], PDO::PARAM_STR);
    $add->bindParam(':m', $_POST['email'], PDO::PARAM_STR);
    $add->bindParam(':s', $_POST['taille'], PDO::PARAM_INT);

    //on execute la requete
    $add->execute();

     //-----------------------------------------------
//DECLARE LES VARIABLES
//-----------------------------------------------

    $email_expediteur = $_POST['email'];
    $fonctionnalite = $_POST['fonctionnalite'];
    $gravure = $_POST['gravure'];
    $taille = $_POST['taille'];
    $choix = $_POST['choix'];
    $image = $_POST['image'];
    $sujet = 'Nouveau message sur le site www.paceme.fr';


    $destinataire='pacemecontact@gmail.com';
    $message_texte='Bonjour. Vous avez reçu un message de l\'adresse suivante : "'.$email_expediteur.'"'.'.';

    $message_html='<html> 
     <head> 
     <title>Message provenant du site www.paceme.fr</title> 
     </head> 
     <body>
     	<p>Bonjour.</p>
     	
     	<p>Vous avez reçu un message de l\'adresse suivante : '.$email_expediteur.'</p>
     	
     	<p>Cette personne souhaite recevoir une bague : '.$choix.'</p>
     	<p>Voici la source de l\'image : '. $image .'</p> 
     	
     	<img style="width: 300px;height: 190px;" src="http://preprod.paceme.fr/'.$image.'">

     	
     	<p>Pour une taille de : '. $taille .'</p> 
     	
     	<p>Avec la gravure : '. $gravure .'</p>
     	
     	<p>Cette personne a eu l\'idée de fonctionnalité : '. $fonctionnalite .'</p>
     	
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




    //-----------------------------------------------
//DECLARE LES VARIABLES 2
//-----------------------------------------------

    $email_expediteur2 = $_POST['email'];
    $fonctionnalite2 = $_POST['fonctionnalite'];
    $gravure2 = $_POST['gravure'];
    $taille2 = $_POST['taille'];
    $choix2 = $_POST['choix'];
    $image2 = $_POST['image'];
    $sujet2 = 'Récapitulatif de votre pré-commande Pace Me';
    $pacemeadresse = 'pacemecontact@gmail.com';


    $destinataire2 = $email_expediteur2;
    $message_texte2='Bonjour. Vous avez pré-commandez une bague sur le site www.paceme.fr';

    $message_html2='<html> 
     <head> 
     <title>Récapitulatif de votre pré-commande</title> 
     </head> 
     <body>
     	<p>Bonjour.</p>
     	
     	<p>Vous avez pré-commandez une(deux) bague(s)</p>
     	<p>Voici votre bague : </p> 
     	<img style="width: 300px;height: 190px;" src="http://preprod.paceme.fr/'.$image2.'">

     	
     	<p>Votre taille : '. $taille2 .'</p> 
     	
     	<p>Votre gravure : '. $gravure2 .'</p>
     	
     	<p>Votre fonctionnalité : '. $fonctionnalite2 .'</p>
     	
     	<p>L\'équipe Pace Me vous remercie et vous attend sur le site www.paceme.fr</p>
     	
     	<p style="margin: 0;font-weight: bold;">Relation Client</p>
        <p style="margin: 0;font-weight: bold;margin-bottom: 10px">Pace Me</p>
        <img style="width: 150px;" src="http://preprod.paceme.fr/src/logo-noir/logo-desktop-noir.png">
     	
     	
     </body> 
     </html>';

//-----------------------------------------------
//GENERE LA FRONTIERE DU MAIL ENTRE TEXTE ET HTML
//-----------------------------------------------

    $frontiere2 = '-----=' . md5(uniqid(mt_rand()));

//-----------------------------------------------
//HEADERS DU MAIL
//-----------------------------------------------

    $headers2 = 'From: "Nom" <'.$pacemeadresse.'>'."\n";
    $headers2 .= 'Return-Path: <'.$pacemeadresse.'>'."\n";
    $headers2 .= 'MIME-Version: 1.0'."\n";
    $headers2 .= 'Content-Type: multipart/mixed; boundary="'.$frontiere2.'"';

//-----------------------------------------------
//MESSAGE TEXTE
//-----------------------------------------------
    $message2 = 'This is a multi-part message in MIME format.'."\n\n";

    $message2 .= '--'.$frontiere2."\n";
    $message2 .= 'Content-Type: text/plain; charset="iso-8859-1"'."\n";
    $message2 .= 'Content-Transfer-Encoding: 8bit'."\n\n";
    $message2 .= $message_texte2."\n\n";

//-----------------------------------------------
//MESSAGE HTML
//-----------------------------------------------
    $message2 .= '--'.$frontiere2."\n";

    $message2 .= 'Content-Type: text/html; charset="iso-8859-1"'."\n";
    $message2 .= 'Content-Transfer-Encoding: 8bit'."\n\n";
    $message2 .= $message_html2."\n\n";

    $message2 .= '--'.$frontiere2."\n";

    mail($destinataire2,$sujet2,$message2,$headers2);


    header('Location: ../labague-confirmation2.php');



}
