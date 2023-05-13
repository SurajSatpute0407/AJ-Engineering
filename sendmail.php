<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit']))
{
    $firstname = $_POST['firstname'];
    $lasttname = $_POST['lastname'];
    $email = $_POST['email'];
    $message = $_POST['comment'];
   
    try{
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail-> SMTPAuth = true;
        $mail->Username = 'adityathorat866@gmail.com';
        $mail->Password = 'adi@115544';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';

        $mail->setFrom('adityathorat866@gmail.com');
        $mail->addAddress('adityathorat866@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'Message Received (Contact Page)';
        $mail->Body = "<h3>Name : $firstname <br> Email : $email<br> Message : $message</h3>";
      
        $mail->send();
        $alert = '<div class="alert-success">
        <span>Message Sent! Thank you for contacting us.</span>
      </div>';
    }
     catch(Exception $e){
        $alert = '<div class="alert-error">
        <span>'.$e->getMessage().'</span>
      </div>';
    }    

}
?>