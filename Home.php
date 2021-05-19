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
        function info()
        {                     //function
            echo "function<br>";
            echo "<br>";
        }
        define('MY_CONST', 55);             //constant

        echo "const" . MY_CONST . "<br>";
        echo "<br>";

        $num = 5;                           //variables
        $number = 12;
        $str = "var";
        $bool = true;


        echo "var" . $number . $num . "<br>";     //concatination
        echo "<br>";

        echo mt_rand(1, 60) . "<br>";                //random number
        echo "<br>";

        if ($num == 5) {                              //if operator
            echo '$num = 5' . "<br>";
            echo "<br>";
        } else if ($num == 34) {
            //
        }

        if(1){
            echo "1 Works<br><br>";
        }

        $nums = array(4, 65, 7, 4, 2365, 767, 675);       //array
        echo $nums[1] . "<br>";
        echo "<br>";

        $list = ["age" => 50, "name" => "Alex", "hobby" => "Football"];    //like Map collection in Java
        echo $list["name"] . "<br>";
        echo "<br>";

        for ($i = 0; $i < 10; $i++) {                 //for
            echo $i . " ";
        }
        echo "<br><br>";

        foreach ($nums as &$value) {       //foreach
            echo $value . " ";
        }
        echo "<br><br>";

        info();
        ?>

    </div>

    <?php
    require "components/Footer.php"
    ?>

</body>

</html>