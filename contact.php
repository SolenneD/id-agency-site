<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Pace Me - Contact</title>

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
    <meta name="description" content="Attiré par notre produit ? Contactez-nous.">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="icon" type="image/png" href="src/favicon.png" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="js/custom.js"></script>

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
<body class="footer-body">

<?php include("include/headerWhite.php") ?>
<div class="wrapper-plan">
<section id="page-contact" class="container col-10">
    <section id="contact">
        <div id="trait" class="trait"></div>
        <h2>Nous Contacter</h2>
        <p>Une soudaine envie de mieux nous connaître...</p>
        <p>N’hésitez pas, nous sommes ici pour vous satisfaire !</p>

        <form method="post" action="core/envoi-mail.php">
            <label for="name"></label>
            <input required type="text" name="name" id="name" placeholder="Nom">
            <label for="email"></label>
            <input required type="email" name="email" id="email" placeholder="Adresse email">
            <label for="message"></label>
            <textarea required name="message" placeholder="Message" id="message"></textarea>

            <div id="btn-checkbox">
                <div class="align-input">
                    <input onClick="_gaq.push(['_trackEvent', 'Newsletter', 'Clic', 'Pace Me']);" title="Newsletter" id="newsletter" name="newsletter" value="1" type="checkbox">
                    <label for="newsletter">S’inscrire à la newsletter</label>
                </div>
                <div class="align-input">
                    <a href="src/kit-presse/kit-presse.zip" download="kit-presse">
                        <div class="download"></div>
                        <p onClick="_gaq.push(['_trackEvent', 'Kit Presse', 'Clic', 'Pace Me']);" title="Kit Presse" id="p-download">Télécharger le kit presse</p>
                    </a>
                </div>
            </div>


            <input onClick="_gaq.push(['_trackEvent', 'Formulaire envoyer', 'Clic', 'Pace Me']);" title="Formulaire envoyer" class="btn-valid" type="submit" name="envoi" value="Envoyer">


        </form>

    </section>
    <div class="push"></div>

</section>

</div>

<?php include("include/footerWhite.php") ?>

<script>
    var pageTracker = _gat._getTracker('UA-120265874-1');
    pageTracker._trackPageview();
</script>

</body>
</html>