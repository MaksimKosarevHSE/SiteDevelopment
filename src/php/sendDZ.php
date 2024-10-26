<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once __DIR__ . '/libraries/PHPMailer/src/Exception.php';
require_once __DIR__ . '/libraries/PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/libraries/PHPMailer/src/SMTP.php';

$file = null;
if (isset($_FILES['linal'])){
    $file = "linal";
} else if(isset($_FILES['discra'])){
    $file = "discra";
} else {
    header("Location: ../../Personal_account/sendHomework_error.php");
    die();
}
if(!$_FILES[$file]['error'] == UPLOAD_ERR_OK){
    header("Location: ../../Personal_account/sendHomework_error.php");
    die();
}

    $mail = new PHPMailer;

    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPDebug = 0;
    $mail->Host = 'ssl://smtp.mail.ru';
    $mail->Port = 465;
    $mail->Username = 'hsehelper24@mail.ru';
    $mail->Password = 'UYfyksB720r4BpHnbwuG';
    $mail->setFrom('hsehelper24@mail.ru', $_FILES[$file]['name']);
    if ($file === "linal"){
        $mail->addAddress("makosarev@edu.hse.ru", "Student");
    } else {
        $mail->addAddress("maksimkosarev63285@gmail.com", "Student");
    }

    $mail->Subject = $_FILES[$file]['name'];
    $body =  "Домашняя работа " . $_FILES[$file]['name'];

    $mail->addAttachment($_FILES[$file]['tmp_name'],
        $_FILES[$file]['name']);




    $mail->msgHTML($body);
    if(!$mail->send()){
      header("Location: ../../Personal_account/sendHomework_error.php");
        die();
    }
header("Location: ../../Personal_account/sendHomework_success.php");


?>