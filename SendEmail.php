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
        <div class="second_block">
            Send Email
            <form action="EmailService.php" method="post" class="first_form">
                <input type="email" name="email" placeholder="email" class="inputs"><br>
                <input type="text" name="subject" placeholder="Email subject" class="inputs"><br>
                <textarea type="text" name="emailText" placeholder="Email text" class="text_area"></textarea><br>
          <input type="submit" class="submit_button" value="Send email"><br>
       
       </form>
       </div>
    </div>

    <?php
    require "components/Footer.php"
    ?>

</body>

</html>