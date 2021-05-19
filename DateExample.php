<html>

<head>
    <meta http-equiv="Content-Type" name="viewport" content="text/html; charset=UTF-8 width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="css/styles.css" rel="stylesheet">


</head>

<body>
    <?php
    require "components/Header.php"
    ?>
    <div class="first_block">
        Data Example<br><br>
        <?php
        echo date("F t") . "<br><br>";
        echo date("M-l H:i:s") . "<br><br>";
        echo time() . "<br><br>";
        echo date("M-l H:i:s", time() + 1000) . "<br><br>";
        echo date("M-d H:i:s", strtotime("now")) . "<br><br>";
        echo date("M-d H:i:s", strtotime("+1 Hour")) . "<br><br>";
        echo date("M-d H:i:s", strtotime("+10 Minute")) . "<br><br>";
        echo date("M-d H:i:s", strtotime("-1 Week -2 Day -3 Hour")) . "<br><br>";
        ?>


    </div>
    <?php
    require "components/Footer.php"
    ?>

    <script>
        window.setTimeout(function() {
            window.location.reload();
        }, 30000);
    </script>
</body>

</html>