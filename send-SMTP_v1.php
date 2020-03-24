<?php

        /***
        Server SMTP/POP : mail.thaicreate.com
        Email Account : webmaster@thaicreate.com
        Password : 123456
        */
        require_once('class.phpmailer.php');

        $mail = new PHPMailer();
        $mail->IsHTML(true);
        $mail->IsSMTP();
        $mail->SMTPAuth = true; // enable SMTP authentication
        $mail->SMTPSecure = ""; // sets the prefix to the servier
        $mail->Host = "webmail.totisp.net"; // sets GMAIL as the SMTP server
        $mail->Port = 25; // set the SMTP port for the GMAIL server
        $mail->Username = "s.chollathep@totisp.net"; // GMAIL username
        $mail->Password = "10032533"; // GMAIL password
        $mail->From = "s.chollathep@totisp.net"; // "name@yourdomain.com";
        //$mail->AddReplyTo = "support@thaicreate.com"; // Reply
        $mail->FromName = "chollathep srinuan";  // set from Name
        $mail->Subject = "Test2 sending mail."; 
        $mail->Body = "My Body & <b>My Description</b>";

        $mail->AddAddress("chollathep.s@tot.co.th", "chollathep srinuan"); // to Address

        $mail->Send(); 
?>