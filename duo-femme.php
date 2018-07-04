<?php
session_start();
include('config/settings.php');

if(!isset($_SESSION['deezer_access_token'])){

    redirect('connexion_duo.php');
}

?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Pace Me - Les modes - Duo_femme</title>

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
    <meta name="description" content="Synchronisez passion musicale et plaisir infini avec votre partenaire grâce à Pace Me.">
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
    <script>
        $(function(){
            var clic = 0;
            var audiofile;
            var bpmfictif = [80, 95, 96, 100, 108, 118, 123, 130, 134, 136, 139, 150, 160, 170, 180, 190];
            var a = 0;
            var clics;

            $("#tap").click(function(){
                clic = clic + 1;
            });

            window.setInterval(function()
            {
                clic = clic * 6;
                clics = clic + bpmfictif[a];
                clics = clics / 2;
                clics = Math.round(clics);

                a = a+1;

                $.ajax({
                    type: "post",
                    url: "core/calcul_bpm.php",
                    data: {clic: clics}
                }).done(function (msg) {
                    {
                        try{
                            audiofile.pause();
                        }catch(e){

                        }
                        var url = msg.substring(0, msg.indexOf('+'));
                        var citation = msg.substring(msg.lastIndexOf('+') + 1);
                        audiofile = new Audio(url);
                        audiofile.play();
                        $('#bpmchange').html(clics);
                        $('#citation').html(citation);
                        clic = 0;
                        clics = 0;

                    }
                });
            }, 5000); //10000 milliseconds = 10 seconds
        });

    </script>
</head>
<body class="vague-bottom-mode">
<?php include("include/headerWhite.php") ?>
<div class="wrapper-mode">

    <section id="page-lesmodes" class="container col-10 row">
    <article class="col-4">
        <div id="trait" class="trait"></div>
        <h2>Les Modes</h2>

        <article class="champ-mode-petit">
            <div id="solo" class="rond-mode"></div>
            <div class="droit-mode">
                <p class="champ-mode-blanc moyen-blanc">Solo</p>
                <p class="champ-mode-blanc petit-blanc">Atteignez le 7e ciel du bout des doigts</p>
            </div>
            <a href="solo.php" class="test-mode">Jouer</a>
        </article>

        <article class="champ-mode-petit active-champ">
            <div id="duo" class="rond-mode"></div>
            <div class="droit-mode">
                <p class="champ-mode-blanc moyen-blanc">Duo</p>
                <p class="champ-mode-blanc petit-blanc">Laissez vos corps enflammer la scène !</p>
            </div>
            <a href="duo.php" class="test-mode">Jouer</a>
        </article>

        <article class="champ-mode-petit">
            <div id="versus" class="rond-mode"></div>
            <div class="droit-mode">
                <p class="champ-mode-blanc moyen-blanc">Versus</p>
                <p class="champ-mode-blanc petit-blanc">Qui de vous deux dominera l’autre ?</p>
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

        <p class="center-text">Cliquez au rythme de votre coeur et la musique s’adapte à vous !</p>

        <div class="jeux-mode">
            <div id="tap" class="coeur">
                <a class="button heart"></a>
            </div>

            <div class="trait-mode2"></div>
            <p class="bpm-mode-solo"><span id="bpmchange">0</span> BPM</p>
            <div class="trait-mode2"></div>
            <div class="femme">
                <div class="heart-homme-femme"></div>
            </div>
        </div>
        <p class="texte-solo" id="citation">Cliquez pendant 5 secondes sur le bouton et ...</p>


    </article>

</section>
    <div class="push"></div>

</div>
<?php include("include/footerWhite.php") ?>


<script>
    $("#tap").click(function(e){
        $(this).append($("<div class='circle ping'>"));
        window.setTimeout(function(){
            $("div.circle:first-of-type").remove();
        }, 1000)
        //$("#ici").toggleClass("ping");
    });
</script>

</body>
</html>