<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer-6.5.2/src/Exception.php';
require 'PHPMailer-6.5.2/src/PHPMailer.php';
require 'PHPMailer-6.5.2/src/SMTP.php';


require_once("config/db.php");
if (isset($_POST['submit_email']) && $_POST['email'])
{
  $select=mysqli_query( $query , "SELECT `email` , `password` FROM `users` WHERE `email`= '$email' ");
  if(mysqli_num_rows($select ) == 1)
  {
    while($row=mysqli_fetch_array($select))
    {
      $email=md5($row['email']);
      $pass=md5($row['password']);
    }
    $link="<a href='reset.php?key=".$email."&reset=".$pass."'>Click To Reset password</a>";
    require_once('PHPMailer-6.5.2/src/PHPMailer.php');
    $mail = new PHPMailer();
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    // enable SMTP authentication
    $mail->SMTPAuth = true;                  
    // GMAIL username
    $mail->Username = "techshop000.store@gmail.com";
    // GMAIL password
    $mail->Password = "0699272311aA@";
    $mail->SMTPSecure = "ssl";  
    // sets GMAIL as the SMTP server
    $mail->Host = "smtp.gmail.com";
    // set the SMTP port for the GMAIL server
    $mail->Port = "465";
    $mail->From='techshop000.store@gmail.com';
    $mail->FromName='Ayoub';
    $mail->AddAddress('reciever_email_id', 'reciever_name');
    $mail->Subject  =  'Reset Password';
    $mail->IsHTML(true);
    $mail->Body    = 'Click On This Link to Reset Password '.$pass.'';
    if($mail->Send())
    {
      echo "Check Your Email and Click on the link sent to your email";
    }
    else
    {
      echo "Mail Error - >".$mail->ErrorInfo;
    }
  }	
}
?>