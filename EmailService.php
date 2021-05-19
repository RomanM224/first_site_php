<?php
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';

        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $emailText = $_POST['emailText'];

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = '465';
        $mail->isHTML(true);
        $mail->Username = 'application3833@gmail.com';
        $mail->Password = 'kywqfpvouulvhmxv';
        $mail->SetFrom('application3833@localhost.com');
        $mail->Subject = $subject;
        $mail->Body = $emailText . '<br>';
        $mail->addAddress($email);

        // $mail->Subject = 'Email Subject';
        // $mail->Body = 'Email Body<br>';
        // $mail->addAddress('wsc9201@inbox.lv');

        $mail->Send();

        $redirect = "http://" . $_SERVER['HTTP_HOST'] . '/first_site/Home.php';
        header('Location:' . $redirect);



        // $message = "Message";
        // $to = "wsc9201@inbox.lv";
        // $from = "example@exmp.com";
        // $subject = "Theme";

        // $subject = "=?utf-8?B?" . base64_encode($subject) . "?=";
        // $headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";

        // mail($to, $subject, $message, $headers);
    