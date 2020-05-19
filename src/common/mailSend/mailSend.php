<?php
$loader = require __DIR__.'/../../../vendor/autoload.php';
$loader->add('common', __DIR__.'/../../../src');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$current = file_get_contents('php://input');
/*$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';

// Настройки SMTP
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPDebug = 0;
$mail->Host = 'ssl://smtp.gmail.com';
$mail->Port = 465;
$mail->Username = 'Логин';
$mail->Password = 'Пароль';
// От кого
$mail->setFrom('mail@snipp.ru', 'Snipp.ru');
// Кому
$mail->addAddress('mail@site.com', 'Иван Петров');
// Тема письма
$mail->Subject = 'Заявка на кредитование';
// Тело письма
$body = $current
$mail->msgHTML($body);
$mail->send();*/
echo(true);
