<html>

<head>
    <meta http-equiv="Content-Type" name="viewport" content="text/html; charset=UTF-8 width=device-width, initial-scale=1">
    <title>Files</title>
    <link href="css/styles.css" rel="stylesheet">


</head>

<body>
    <?php
    require "components/Header.php"
    ?>


    <div class="first_block">
        <?php

            //Write in file
            // $file = fopen("files/text.txt", "a");
            // fwrite($file, "\nExample text\nNew Line");
            // fclose($file);

            $file_name = "text.txt";
            $file = fopen("files/" . $file_name, "r");


            $content = fread($file, filesize("files/" . $file_name));

            fclose($file);

            echo $content;

            file_put_contents("files/a.txt", "Second text");

            echo "<br><br>" . file_get_contents("files/a.txt");

            echo "<br><br>" . 'file_exists("files/a.txt"): ' . file_exists("files/a.txt");

            rename("files/a.txt", "files/new_name.txt");

            unlink("files/new_name.txt");

            echo "<br><br>"  . __FILE__;
            echo "<br><br>"  . fileperms(__FILE__);
        ?>

    </div>

    <?php
    require "components/Footer.php"
    ?>

</body>

</html>