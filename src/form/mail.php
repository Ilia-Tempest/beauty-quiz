<?php 

require_once('PHPMailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';
$name = $_POST['user_name'];
$city = $_POST['user_city'];
$phone = $_POST['user_phone'];
$money = $_POST['user_money'];
$store = $_POST['user_store'];
$mes = $_POST['user_mes'];
$dream = $_POST['user_dream'];
//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'ssl://smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'mocap00@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'Arialdragon47'; // Ваш пароль от почты с которой будут отправляться письма                           // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('mocap00@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('Alexcom75@mail.ru');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с лендинга Квиза:';
$mail->Body    = 'Пользователь' .$name . ' оставил заявку, его город: ' .$city. '<br>Телефон пользователя: ' .$phone. 
'<br>На какой уровень дохода планирует выйти пользователь за год: ' .$money. 
'<br>Опыт в бизнесе: ' .$store. 
'<br>Соцсети: ' .$mes. 
'<br>Мечта: ' .$dream;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: ../../../../');
}
?>