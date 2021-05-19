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

    <form action="CheckPost.php" method="post" class="first_form">
        Post Example<br>
        <input type="text" name="username" placeholder="name" class="inputs"><br>
        <input type="email" name="email" placeholder="email" class="inputs"><br>
        <input type="password" name="password" placeholder="password" class="inputs"><br>
        <textarea type="text" name="textarea" placeholder="textarea" class="text_area"></textarea><br>
        <input type="submit" class="submit_button" value="Submit"><br>
    </form>
    <form action="CheckGet.php" method="get" class="first_form">
        Get Example<br>
        <input type="text" name="username" placeholder="name" class="inputs"><br>
        <input type="email" name="email" placeholder="email" class="inputs"><br>
        <input type="password" name="password" placeholder="password" class="inputs"><br>
        <textarea type="text" name="textarea" placeholder="textarea" class="text_area"></textarea><br>
        <input type="submit" class="submit_button" value="Submit"><br>
    </form>
    <?php
    require "components/Footer.php"
    ?>
</body>

</html>