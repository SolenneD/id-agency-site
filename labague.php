<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Pace Me - La bague</title>

    <meta id="meta-images" property="og:url"           content="http://paceme.fr/<?php echo  ($curren_image)?$curren_image:"src/motiv-rings.png" ?>" />
    <meta property="og:type"          content="service" />
    <meta property="og:title"         content="Pace Me" />
    <meta property="og:description"   content="Personnaliser votre bague de plaisir avec Pace Me" />
    <meta id="meta-image" property="og:image"         content="http://paceme.fr/<?php echo  ($curren_image)?$curren_image:"src/motiv-rings.png" ?>"/>

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
<body class="vague-bottom-labague">
<?php include("include/headerWhite.php") ?>
<div class="wrapper-bague">

    <div class="labague"></div>
    <section id="page-labague" class="container col-10">
        <article>
            <div class="trait"></div>
            <h2>La bague</h2>

            <video controls autoplay loop muted width="700">
                <source src="src/labague/motion-labague.mp4">
                <source src="src/labague/motion-labague.webm">
            </video>

            <div class="row cara-3">
                <div class="caracteristique col-3">
                    <div id="cara"></div>
                    <p>Pulsation</p>
                    <p>Grâce aux capteurs intégrés, la bague enregistre votre rythme cardiaque pendant toute votre activité sexuelle</p>
                </div>
                <div class="caracteristique col-3">
                    <div id="waterproof"></div>
                    <p>Waterproof</p>
                    <p>Vous pouvez prendre du plaisir n’importe où… Votre bague résiste à l’eau
                    </p>
                </div>
                <div class="caracteristique col-3">
                    <div id="autonomie"></div>
                    <p>Autonomie</p>
                    <p>N’ayez pas peur de la panne. Tenez jusqu'à 7 jours sans avoir besoin de recharger votre bague</p>
                </div>
                <div class="caracteristique col-3">
                    <div id="orgasme"></div>
                    <p>Orgasme</p>
                    <p>Grâce à sa technologie pointue, votre bague vous garantie l’orgasme</p>
                </div>
            </div>

        </article>


    </section>
    <section id="page-labague-custom" class="container col-10">
        <article class="col-10 clear">
            <div class="trait"></div>
            <h2>Les packs</h2>
        </article>


        <form action="labague-custom.php#page-labague-custom" method="post">

            <div class="choix-de-bague row col-8 container">
                <div class="btn-choix">
                    <div class="choix-bague solo"></div>
                    <label for="choix-solo">Un joueur<input required id="choix-solo" name="choix" value="choix-solo" type="radio"></label>
                </div>

                <div class="btn-choix">
                    <div class="choix-bague duo"></div>
                    <label for="choix-duo">Deux joueurs<input required id="choix-duo" name="choix" value="choix-duo" type="radio"></label>
                </div>

            </div>
        <input type="submit" class="btn container" value="Suivant">
        </form>



    </section>
    <section id="page-labague-mode" class="container col-10">
        <article id="champ-mode">
            <p class="champ-mode-blanc">Quel mode de jeu est fait pour vous ?</p>
            <a href="qintro.php" class="btn btn-test">Explorez-vous</a>

        </article>
    </section>
    <div class="push"></div>

</div>
<?php include("include/footerWhite.php") ?>


</body>

</html>