<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';

$mail=new PHPMailer(true);
$alert='';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $date=$_POST['date'];

    try{
        $mail->isSMTP();
        $mail->Host='smtp.gmail.com';
        $mail->SMTPAuth=true;
        $mail->Username='omeshpadampalle@gmail.com';
        $mail->Password='amswbjlpucurlmee';
        $mail->SMTPSecure='tls';
        $mail->Port='587';

        $mail->setFrom('omeshpadampalle@gmail.com');
        $mail->addAddress('omeshpadampalle@gmail.com');

        $mail->IsHTML(true);
        $mail->Subject='Message Received from Client:'.$name;
        $mail->Body="Name:$name <br> Email:$email <br> number:$number <br>date:$date";
        $mail->send();
        $alert="<div class='alert-success'><span>Message sent! Thanks for contact us.</span></div>";

    }
    catch(Exception $e){
        // $alert="<div class='alert-error'><span>'.$e->getMessage().'</span></div>";
    }
}

?>