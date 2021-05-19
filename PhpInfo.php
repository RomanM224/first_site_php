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
        <?php
        // phpinfo();

        //   foreach($_SERVER as $key => $value){
        //       echo $key . " => " . $value . "<br>";
        //   }
        //   echo "<pre>";
        //   print_r($_SERVER);
        //   echo "</pre>";

        // echo $_SERVER['HTTPS'];
        echo '$_SERVER["HTTP_HOST"]: ' . $_SERVER['HTTP_HOST'];
        echo "<br><br>";
        echo '$_SERVER["REQUEST_URI"]: ' . $_SERVER['REQUEST_URI'];
       echo array_key_exists("source", $_GET);
        if (array_key_exists("source", $_GET)) {
            if ($_GET['source'] != "") {
                $link = explode("?source=", $_SERVER['REQUEST_URI']);
                $redirect = "http://" . $_SERVER['HTTP_HOST'] . $link[0];

                header("HTTP/1.1 301 Moved Permamently");
                echo "<br>";
                print_r($link);
                header('Location:' . $redirect);

            }
        }
        ?>

    </div>

    <?php
    require "components/Footer.php"
    ?>

</body>

</html>