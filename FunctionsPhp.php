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
            echo "<div class='second_block'>";
            echo "<h1>Array functions</h1>";
            $list = [45, 12, 10, 3, 12];
            print_r($list);

            echo'<br><br> unset($list[1]) <br>';
            unset($list[1]);
            print_r($list);

            echo'<br><br> $list = array_values($list) <br>';
            $list = array_values($list);
            print_r($list);

            echo'<br><br>sort($list)<br>';
            sort($list);
            print_r($list);

            echo'<br><br>rsort($list)<br>';
            rsort($list);
            print_r($list);

            echo'<br><br>shuffle($list)<br>';
            shuffle($list);
            print_r($list);

            echo'<br><br>in_array(3, $list): ' . in_array(3, $list) . '<br>';
            echo'in_array(10000, $list): ' . in_array(10000, $list) . '<br>';

            echo'<br><br>$arr = array_slice($list, 2, count($list))<br>';
            $arr = array_slice($list, 2, count($list));
            print_r($arr);

            $arr_1 = [5, 7];
            $arr_2 = [6, 8, 9];
            echo'<br><br>$arr_3 = array_merge($arr_1, $arr_2)<br>';
            $arr_3 = array_merge($arr_1, $arr_2);
            print_r($arr_3);

            echo "</div>";
            echo "<div class='second_block'>";
            echo "<h1>Other functions</h1>";
            $x = 10;
            echo'<br><br>$x = 10<br>gettype($x)<br>';
            echo gettype($x);

            echo'<br><br>$x = 10<br>is_numeric($x)<br>';
            echo is_numeric($x);

            $str = "Example";
            echo'<br><br>$str = "Example"<br> strpos($str, "am")<br>';
            echo strpos($str, "am");

            $words = "john, bob, alex";
            $arr_words = explode(",", $words);
            echo'<br><br>$arr_words = explode(",", $words)<br>';
            print_r($arr_words);

            echo'<br><br>implode(" | ", $arr_words)<br>';
            echo implode(" | ", $arr_words);

            echo "</div>";
        ?>

    </div>

    <?php
    require "components/Footer.php"
    ?>

</body>

</html>