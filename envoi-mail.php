<?php

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