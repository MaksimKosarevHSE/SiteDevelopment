<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once __DIR__ . '/../../libraries/PHPMailer/src/Exception.php';
require_once __DIR__ . '/../../libraries/PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/../../libraries/PHPMailer/src/SMTP.php';

function sendCode($email, $name, $href) : bool{
        $mail = new PHPMailer;
        $mail->CharSet = 'UTF-8';
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPDebug = 0;
        $mail->Host = 'ssl://smtp.mail.ru';
        $mail->Port = 465;
        $mail->Username = 'hsehelper24@mail.ru';
        $mail->Password = 'UYfyksB720r4BpHnbwuG';
        $mail->setFrom('hsehelper24@mail.ru', '24knt9develop.ru');
        $mail->addAddress($email, $name);
        $mail->Subject = "Активация аккаунта";
        $body = " <p>Перейдите по ссылке, чтобы завершить регистрацию</p>
  </br> <a href=\"$href\">Подтвердить</a>";
        $mail->msgHTML($body);
        return $mail->send();
}

function sendResetCode($email, $name, $href) : bool{
    $mail = new PHPMailer;
    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPDebug = 0;
    $mail->Host = 'ssl://smtp.mail.ru';
    $mail->Port = 465;
    $mail->Username = 'hsehelper24@mail.ru';
    $mail->Password = 'UYfyksB720r4BpHnbwuG';
    $mail->setFrom('hsehelper24@mail.ru', '24knt9develop.ru');
    $mail->addAddress($email, $name);
    $mail->Subject = "Смена пароля";
    $body = " <p>Перейдите по ссылке, чтобы сменить пароль</p>
  </br> <a href=\"$href\">Перейти</a>";
    $mail->msgHTML($body);
    return $mail->send();
}
?>