<?php

require_once('phpmailer/PHPMailerAutoLoad.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$mail->isSMTP();
$mail->Host = 'smtp.yandex.ru';
$mail->SMTPAuth = true;
$mail->Username = 'tr0lldude@yandex.ru';
$mail->Password = 'Lolik228';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('tr0lldude@yandex.ru');
$mail->addAddress('lisantov@yandex.ru');
$mail->isHTML(true);

$mail->Subject = 'Сообщение с формы сайта';
$mail->Body =   $name . ', с почтой: '. $email . ', написал сообщение: '. $message;
$mail->AltBody = '';

if($mail->send()) {
    echo 'Error';
} else {
    header('location: contact-thank-you.html ');
}
?>