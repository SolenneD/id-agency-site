<?php

include"config/settings.php";

$resultat = 0;
$sexe = 0;

if($_POST['q1'] == "femme"){
    $sexe = $sexe + 1;
}


if($_POST['q2'] == "couple"){
    $resultat = $resultat + 1;
}
if($_POST['q2'] == "libre"){
    $resultat = $resultat + 3;
}


if($_POST['q3'] == "extraverti"){
    $resultat = $resultat + 1;
}
if($_POST['q3'] == "curieux"){
    $resultat = $resultat + 2;
}
if($_POST['q3'] == "malicieux"){
    $resultat = $resultat + 2;
}
if($_POST['q3'] == "rebel"){
    $resultat = $resultat + 3;
}


if($_POST['q4'] == "conquetes"){
    $resultat = $resultat + 1;
}
if($_POST['q4'] == "libertins"){
    $resultat = $resultat + 3;
}

$zero = 0;
$six = 6;
$cinq = 5;
$sept = 7;
$huit = 8;

if($resultat == 0){
    $rockeur = "Beatles";
    $horoscope = $db->prepare('SELECT * FROM horoscope WHERE score = :i');
    $horoscope->bindParam(':i', $zero, PDO::PARAM_STR);
    $horoscope->execute();
    $data = $horoscope->fetch(PDO::FETCH_ASSOC);
}
if(0 < $resultat && $resultat < 6 ){
    $rockeur = "Lennon";
    $horoscope = $db->prepare('SELECT * FROM horoscope WHERE :z < score AND score < :i');
    $horoscope->bindParam(':z', $zero, PDO::PARAM_STR);
    $horoscope->bindParam(':i', $six, PDO::PARAM_STR);
    $horoscope->execute();
    $data = $horoscope->fetch(PDO::FETCH_ASSOC);
}
if(5 < $resultat && $resultat < 7){
    $rockeur = "Halliday";
    $horoscope = $db->prepare('SELECT * FROM horoscope WHERE :z < score AND score < :i');
    $horoscope->bindParam(':z', $cinq, PDO::PARAM_STR);
    $horoscope->bindParam(':i', $sept, PDO::PARAM_STR);
    $horoscope->execute();
    $data = $horoscope->fetch(PDO::FETCH_ASSOC);
}
if($resultat > 8){
    $rockeur = "Beatles";
    $horoscope = $db->prepare('SELECT * FROM horoscope WHERE score > :i');
    $horoscope->bindParam(':i', $huit, PDO::PARAM_STR);
    $horoscope->execute();
    $data = $horoscope->fetch(PDO::FETCH_ASSOC);
}


?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Paceme - Quelle est votre niveau de Rock'Attitude ?</title>

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
<body id="background-questionnaire">

<?php include("include/headerBlack.php") ?>

<section id="q2" class="container col-10">


    <div class="etapes row">
        <p href="q1.html" class="question q-1 prev">1</p>
        <div class="trait-q"></div>
        <p href="q2.html" class="question q-2 prev">2</p>
        <div class="trait-q"></div>
        <p href="q3.html" class="question q-3 prev">3</p>
        <div class="trait-q"></div>
        <p href="q4.html" class="question q-4 prev">4</p>
        <div class="trait-q"></div>
        <p href="q5.html" class="question q-5 prev">5</p>
        <div class="trait-q"></div>
        <p href="qresult.html" class="question result active">Résultat</p>
    </div>


    <div class="trait"></div>
    <h2>Votre rock’attitude</h2>

    <article class="col-6" style="float: left">

        <div class="bar-progress">
            <progress class="avancement" value="<?= $data['progressrock'] ?>" max="100"></progress>
            <span class="theme">Rock’Attitude</span>
        </div>
        <!--<div class="bar-progress">
            <progress class="avancement" value="<?= $data['progresssonore'] ?>" max="100"></progress>
            <span class="theme">Puissance sonore</span>
        </div>
        <div class="bar-progress">
            <progress class="avancement" value="<?= $data['progressbpm'] ?>" max="100"></progress>
            <span class="theme">BPM</span>
        </div> -->
        <div class="bar-progress">
            <progress class="avancement" value="<?= $data['progresssexualite'] ?>" max="100"></progress>
            <span class="theme">Sex'Attitude</span>
        </div>

    </article>
    <article class="col-6 rockattitude" style="float: right">
        <h4>Vous ressemblez à <span><?= $data['rockeur'] ?></span></h4>
        <p><?= $data['texte'] ?></p>

    </article>

    <div class="clear"></div>

    <div class="col-10 container">
        <p>Le mode <span><?= $data['mode'] ?></span> est donc fait pour vous ! </p>
        <a onClick="_gaq.push(['_trackEvent', 'Lien Modes Questionnaire', 'Clic', 'Pace Me']);" title="Lien Modes Questionnaire" href="<?= $data['lien'] ?>?mode=<?php echo $data['mode'] ?>">Tester</a>
    </div>


</section>

<script>
    var pageTracker = _gat._getTracker('UA-120265874-1');
    pageTracker._trackPageview();
</script>

</body>
</html>