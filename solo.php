<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Pace Me - Votre Rock'Attitude</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(function(){
        var clic = 0;
        var bpm;

        $("#tap").click(function(){
            clic =clic + 1;
        });

        window.setInterval(function()
        {
            $.ajax({
                type: "post",
                url: "core/calcul_bpm.php",
                data: {clic: clic}
            }).done(function (msg) {
                {
                    bpm = msg;
                    $('#bpm').html(msg);
                    $('embed').attr('src', msg);
                    clic = 0;
                }
            });
        }, 10000); //10000 milliseconds = 10 seconds
        });

    </script>
</head>
<body>

<p id="tap">Tapez</p>
<p id="clic"></p>
<p id="bpm"></p>
<embed src="" autostart="true" loop="false" hidden>

</body>
</html>