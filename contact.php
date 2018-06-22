<?php

//CONTACT

$msg = '';
//Don't run this unless we're handling a form submission
if (array_key_exists('mail', $_POST)) {
    date_default_timezone_set('Etc/UTC');

    require 'PHPMailerAutoload.php';

    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = 'smtp.gmail.com';
    $mail->Username = "pacemecontact@gmail.com";
    $mail->Password = "iesa2018!";
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;

    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
    $mail->setFrom('pacemecontact@gmail.com', 'Pace Me');
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('pacemecontact@gmail.com', '');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    if ($mail->addReplyTo($_POST['mail'], $_POST['nom'])) {
    $mail->Subject = 'Prise de contact paceme.com';
    //Keep it simple - don't use HTML
    $mail->isHTML(false);


    //Build a simple message body
    $mail->Body = <<<EOT
    
            Professionnel/Particulier: {$_POST['pp']}
                Name: {$_POST['name']}
                Email: {$_POST['mail']}
                Message: {$_POST['message']}

EOT;
    //Send the message, check for errors
    if (!$mail->send()) {
    //The reason for failing to send will be in $mail->ErrorInfo
    //but you shouldn't display errors to users - process the error, log it on your server.
    $msg = 'Désolé, une erreur est survenue. Veuillez réessayer plus tard';
    } else {
    $msg = 'Votre message a bien été envoyé !';
    }
    } else {
    $msg = 'Adresse email invalide, message ignoré.';
    }
}



?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Paceme - Contact</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120265874-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-120265874-1');
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KPP7XMR');</script>
    <!-- End Google Tag Manager -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Synchronisez passion musicale et plaisir infini avec votre nouvelle bague connectée">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="icon" type="image/png" href="src/favicon.png" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!--analytics-->
    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-120265874-1']);
        _gaq.push(['_trackEvent']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>
</head>
<body>

<?php include("include/headerWhite.php") ?>


<section id="page-contact" class="container col-10">
    <section id="contact">
        <div class="trait"></div>
        <h2>Nous Contacter</h2>
        <p>Vous avez besoins de plus d’informations <br> ou bien vous désirez des réponses à vos questions ? <br>N’hésitez pas à nous contacter, nous sommes ici pour vous aider !</p>

        <form method="post" action="core/envoi-mail.php">
            <label for="name"></label>
            <input required type="text" name="name" id="name" placeholder="Nom">
            <label for="email"></label>
            <input required type="email" name="email" id="email" placeholder="Adresse email">
            <label for="message"></label>
            <textarea required name="message" placeholder="Message" id="message"></textarea>

            <div id="btn-checkbox">
                <div class="align-input">
                    <input name="newsletter" value="1" type="checkbox">
                    <label >S’inscrire à la newsletter</label>
                </div>
                <div class="align-input">
                    <a href="src/kit-presse/kit-presse.zip" download="kit-presse">
                        <div class="download"></div>
                        <p id="p-download">Télécharger le kit presse</p>
                    </a>
                </div>
            </div>


            <input class="btn-valid" type="submit" name="envoi" value="Envoyer">


        </form>

    </section>
</section>



<footer class="footer">


    <div class="img-footer">
        <div class="rs-desktop">
            <a href="https://www.facebook.com/pacemerock/" target="_blank"><i style="color: #000000" class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/paceme_rock/" target="_blank"><i style="color: #000000" class="fab fa-instagram"></i></a>
            <a href="https://twitter.com/paceme_rock" target="_blank"><i style="color: #000000" class="fab fa-twitter"></i></a>
            <a href="https://soundcloud.com/paceme_rock" target="_blank"><i style="color: #000000" class="fab fa-soundcloud"></i></a>
        </div>

        <div class="rs-mobile">
            <a href="https://www.facebook.com/pacemerock/" target="_blank"><i style="color: #000000" class="fab fa-facebook-f fa-2x"></i></a>
            <a href="https://www.instagram.com/paceme_rock/" target="_blank"><i style="color: #000000" class="fab fa-instagram fa-2x"></i></a>
            <a href="https://twitter.com/paceme_rock" target="_blank"><i style="color: #000000" class="fab fa-twitter fa-2x"></i></a>
            <a href="https://soundcloud.com/paceme_rock" target="_blank"><i style="color: #000000" class="fab fa-soundcloud fa-2x"></i></a>
        </div>
    </div>


</footer>

</body>
</html>