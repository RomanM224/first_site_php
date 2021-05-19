<?php
    session_start();

    unset($_SESSION['userName']);
    unset($_SESSION['email']);
    unset($_SESSION['subject']);
    unset($_SESSION['message']);

    unset($_SESSION['errorUserName']);
    unset($_SESSION['errorEmail']);
    unset($_SESSION['errorSubject ']);

    function redirect(){
        header('Location: FormExample2.php');
        exit;
    }

    $userName = htmlspecialchars(trim($_POST['userName']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

 //   echo $userName . " " . $email . " " . $subject . " " . $message . " ";

    $_SESSION['userName'] = $userName;
    $_SESSION['email'] = $email;
    $_SESSION['subject'] = $subject;
    $_SESSION['message'] = $message;

    if(strlen($userName) <= 3){
        $_SESSION['errorUserName'] = "Input correct name";
    } else if(strlen($email) <= 10){
        $_SESSION['errorEmail'] = "Input correct mail";
    } else if(strlen($subject) <= 5){
        $_SESSION['errorSubject'] = "Input correct subject1";
    } else {
        $_SESSION['errorUserName'] = "";
        $_SESSION['errorEmail'] = "";
        $_SESSION['errorSubject'] = "";
    }

    redirect();
