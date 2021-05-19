<?php
session_start();
?>
<html>

<head>
    <meta http-equiv="Content-Type" name="viewport" content="text/html; charset=UTF-8 width=device-width, initial-scale=1">
    <title>Cookie Session</title>
    <link href="css/styles.css" rel="stylesheet">


</head>

<body>
    <?php
    require "components/Header.php"
    ?>

    <div class="first_block">
        <?php

        $userName = "Alex";
        setcookie("userName", $userName, time() - 180);    //Delete cookie
        setcookie("userName", $userName, time() + 180);  //Set cookie
        //  print_r($_COOKIE);

        echo $_COOKIE['userName'];

        $_SESSION['userName'] = $userName;    //add element to session
        //   unset($_SESSION['userName']);       //delete element from session

       // session_destroy();       //delete session

        echo "<br><br>" . session_id() . "<br><br>";

        if (array_key_exists("userName", $_SESSION) && $_SESSION['userName'] == "Alex") {
            echo "<br><br>Session works";
        }


        ?>

    </div>

    <?php
    require "components/Footer.php"
    ?>

</body>

</html>