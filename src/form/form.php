<?php 

require_once('PHPMailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$nameform = $_POST['user_nameform'];
$tel = $_POST['user_tel'];
$about = $_POST['user_about'];
$in = $_POST['user_in'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'ssl://smtp.yandex.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'admin@alta-m.spb.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = '12345678aa'; // Ваш пароль от почты с которой будут отправляться письма                           // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('admin@alta-m.spb.ru'); // от кого будет уходить письмо?
$mail->addAddress('zakaz@alta-m.spb.ru');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с сайта "ООО АЛЬТА М" сайта';
$mail->Body    = '' .$nameform . ' оставил заявку, его телефон ' .$tel. '<br>Откуда нужно отправить груз: ' .$about. '<br>Куда отправить: ' .$in;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: ../index.html');
}
?>