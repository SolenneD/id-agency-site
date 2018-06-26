<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Pace Me - Les modes</title>

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
<body class="point-bottom-gris">
<?php include("include/headerWhite.php") ?>

<section id="page-lesmodes" class="container col-10 row">
    <article class="col-4">
        <div class="trait"></div>
        <h2>Les Modes</h2>

        <article class="champ-mode-petit">
            <div id="solo" class="rond-mode"></div>
            <div class="droit-mode">
                <p class="champ-mode-blanc moyen-blanc">Solo</p>
                <p class="champ-mode-blanc petit-blanc">Trouvez votre plaisir dans la musique...</p>
            </div>
            <a href="solo.php" class="test-mode">Tester</a>
        </article>

        <article class="champ-mode-petit active-champ">
            <div id="duo" class="rond-mode"></div>
            <div class="droit-mode">
                <p class="champ-mode-blanc moyen-blanc">Duo</p>
                <p class="champ-mode-blanc petit-blanc">Laissez vos corps guider la musique...</p>
            </div>
            <a href="duo.php" class="test-mode">Tester</a>
        </article>

        <article class="champ-mode-petit">
            <div id="versus" class="rond-mode"></div>
            <div class="droit-mode">
                <p class="champ-mode-blanc moyen-blanc">Versus</p>
                <p class="champ-mode-blanc petit-blanc">Qui auras le plus de plaisir musical ?!</p>
            </div>
            <a href="#" class="test-mode  mode-a-venir">À venir</a>
        </article>

        <article class="champ-mode-petit">
            <div id="band" class="rond-mode"></div>
            <div class="droit-mode">
                <p class="champ-mode-blanc moyen-blanc">Band</p>
                <p class="champ-mode-blanc petit-blanc">Devenez l’instrument de vos plaisir...</p>
            </div>
            <a href="#" class="test-mode  mode-a-venir">À venir</a>
        </article>

    </article>
    <article class="col-8">

        <p style="width: auto; text-align: center;">Choisissez votre partenaire</p>

        <div class="jeux-mode jeux-mode-duo">

            <a href="duo-femme.php" class="portail-duo portail-femme"></a>

            <a href="duo-homme.php" class="portail-duo portail-homme"></a>
        </div>


    </article>
</section>

<?php include("include/footerWhite.php") ?>


</body>
</html>