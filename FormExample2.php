<?php
    session_start();
?>
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
    <form action="CheckForm.php" method="post" class="first_form">
        Form Example<br>
        <input type="text" name="userName" value="<?=isset($_SESSION['userName']) ? $_SESSION['userName'] : ''?>" placeholder="name" class="inputs"><br>
        <div class="redText"><?=isset($_SESSION['errorUserName']) ? $_SESSION['errorUserName'] : ''?></div>
        <input type="email" name="email" value="<?=isset($_SESSION['email']) ? $_SESSION['email'] : ''?>" placeholder="email" class="inputs"><br>
        <div class="redText"><?=isset($_SESSION['errorEmail']) ? $_SESSION['errorEmail'] : ''?></div>
        <input type="text" name="subject" value="<?=isset($_SESSION['subject']) ? $_SESSION['subject'] : ''?>" placeholder="subject"  class="inputs"><br>
        <div class="redText"><?=isset($_SESSION['errorSubject']) ? $_SESSION['errorSubject'] : ''?></div>
        <textarea type="text" name="message"  placeholder="message" class="text_area"><?=isset($_SESSION['message']) ? $_SESSION['message'] : ''?></textarea><br>
        <button type="submit" class="submit_button">Submit</button><br>
    </form>

    </div>

    <?php
    require "components/Footer.php"
    ?>

</body>

</html>