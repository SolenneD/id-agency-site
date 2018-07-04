<?php

include('config/settings.php');
$bague = $db->prepare('SELECT * FROM bague');
//on execute la requete
$bague->execute();

session_start();

/* recentely added*/

$custom = $db->prepare('SELECT * FROM costum WHERE :b = sources');
$custom->bindParam(':b', $_SESSION['image'], PDO::PARAM_STR);
$custom->execute();
$datas = $custom->fetch(PDO::FETCH_ASSOC);


?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Pace Me - La bague</title>

    <meta id="meta-images" property="og:url"           content="http://paceme.fr/" />
    <meta property="og:type"          content="service" />
    <meta property="og:title"         content="Pace Me" />
    <meta property="og:description"   content="Personnaliser votre bague de plaisir avec Pace Me" />
    <meta id="meta-image" property="og:image"         content="http://paceme.fr/"/>

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
    <meta name="description" content="Pace Me la bague connectée qui gère la musique rock pendant votre acte sexuel.">
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

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.0&appId=250004505760813&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <section id="page-labague-custom" class="container col-10">
        <article class="col-10 clear">
            <div class="trait"></div>
            <h2>Confirmation</h2>
        </article>
        <div class="row">
            <div class="bague-custom-conf col-5">
                <img id="image_facebook" class="img-partager-conf" src="<?php echo $_SESSION['image'] ?>" alt="customisation-bague">
<!--                <a data-href="http://paceme.fr/labague-confirmation2.php" data-layout="button" data-size="large" data-action="share" data-show-faces="true" data-share="true" data-mobile-iframe="true" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Partager sur Facebook</a>-->
                <a  data-layout="button" data-size="large" data-action="share" data-show-faces="true" data-share="true" class="fb-xfbml-parse-ignore" target="_blank"  href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fpaceme.fr%2Flabague-custom.php%3Fcouleur%3D<?php echo $datas['couleur']?>%26ornement%3D<?php echo  $datas['ornement']?>&amp;src=sdkpreparse" data-mobile-iframe="true">Partager sur Facebook</a>
            </div>
            <div class="col-5">


                <h3>Nous avons bien reçu votre pré-commande !</h3>

                <a class="btn" href="index.php">Retour à l'accueil</a>


            </div>

        </div>


    </section>
    <div class="push"></div>

</div>
<?php include("include/footerWhite.php") ?>


</body>
</html>