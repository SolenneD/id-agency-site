<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Pace Me - Quel est votre niveau de Rock'Attitude ?</title>

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
    <meta name="description" content="Découvrez votre niveau de Rock'Attitude et de Sex'Attitude ! Niveau sexe vous en êtes où ?">
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
<body class="vague-bottom-q" id="background-questionnaire">

<?php include("include/headerBlack.php") ?>
<div class="wrapper-qimage">

    <section id="q2" class="container col-6">


    <div class="etapes row">
        <p href="q1.html" class="question q-1 prev">1</p>
        <div class="trait-q"></div>
        <p href="q2.html" class="question q-2 prev">2</p>
        <div class="trait-q"></div>
        <p href="q3.html" class="question q-3 prev">3</p>
        <div class="trait-q"></div>
        <p href="q4.html" class="question q-4 active">4</p>
        <div class="trait-q"></div>
        <p href="q5.html" class="question q-5">5</p>
        <div class="trait-q"></div>
        <p href="qresult.html" class="question result">Résultat</p>
    </div>


    <div id="trait" class="trait"></div>
    <h2>… et sous la couette ?</h2>


    <form action="q5.php" method="post">
        <input class="cache" hidden type="text" name="q1" value="<?php echo $_POST['q1'] ?>">
        <input class="cache" hidden type="text" name="q2" value="<?php echo $_POST['q2'] ?>">
        <input class="cache" hidden type="text" name="q3" value="<?php echo $_POST['q3'] ?>">
        <div class="container row">
            <div class="col-4">
                <p class="align-input">
                    <input id="crie" type="checkbox" name="q4A" value="crie" class="checkbox-noir" />
                    <label for="crie">Je crie</label>
                </p>

                <p class="align-input">
                    <input id="domine" type="checkbox" name="q4B" value="domine" class="checkbox-noir" />
                    <label for="domine">Je domine</label>
                </p>

                <p class="align-input">
                    <input id="gemis" type="checkbox" name="q4C" value="gemis" class="checkbox-noir" />
                    <label for="gemis">Je gémis</label>
                </p>
            </div>
            <div class="col-4">
                <p class="align-input">
                    <input id="mords" type="checkbox" name="q4D" value="mords" class="checkbox-noir" />
                    <label for="mords">Je mords</label>
                </p>

                <p class="align-input">
                    <input id="auto" type="checkbox" name="q4E" value="auto" class="checkbox-noir" />
                    <label for="auto">Je m’auto satisfait</label>
                </p>

                <p class="align-input">
                    <input id="jouets" type="checkbox" name="q4F" value="jouets" class="checkbox-noir" />
                    <label for="jouets">J’aime les jouets</label>
                </p>
            </div>
            <div class="col-4">
                <p class="align-input">
                    <input id="douleur" type="checkbox" name="q4G" value="douleur" class="checkbox-noir" />
                    <label for="douleur">J’aime la douleur</label>
                </p>

                <p class="align-input">
                    <input id="soumets" type="checkbox" name="q4H" value="soumets" class="checkbox-noir" />
                    <label for="soumets">Je me soumets</label>
                </p>

                <p class="align-input">
                    <input id="plusieurs" type="checkbox" name="q4I" value="plusieurs" class="checkbox-noir" />
                    <label for="plusieurs">On est plusieurs</label>
                </p>
            </div>
        </div>

        <input type="submit" value="Position suivante">
    </form>

</section>
    <div class="push"></div>

</div>

</body>
</html>