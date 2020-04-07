<?php
alert("Hii");
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $mailto = $_POST['u_email'];
    $c_name = $_POST['c_name'];
    $f_name = $_POST['f_name'];
    $u_contact = $_POST['u_contact'];
    $u_message = $_POST['u_message'];
    $u_init = "Hii, I am ";

    $message = "Hi, I am $f_name $l_name from $c_name. My Message : $u_message My Contact : $u_contact";
    echo "Hi, I am $f_name $l_name from $c_name. My Message : $u_message. My Contact : $u_contact";
    $mailSub = "Test Mail";
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "prakashj1998@gmail.com";
   $mail ->Password = "SweetyMalar.123";
   $mail ->SetFrom("prakashj1998@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $message;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       alert "Mail Sent";
   }
    ?>





   

