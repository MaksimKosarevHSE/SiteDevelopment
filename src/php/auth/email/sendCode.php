<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once __DIR__ . '/../../libraries/PHPMailer/src/Exception.php';
require_once __DIR__ . '/../../libraries/PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/../../libraries/PHPMailer/src/SMTP.php';
function makeMsg($name, $sub, $info, $butt, $link){
    $htm = <<<EOD
<body style="">
    <table align="center" border="0" cellpadding="0" cellspacing="0"
           width="550" bgcolor="white" style="margin-left: 0px">
        <tbody>
            <tr>
                <td align="center">
                    <table align="center" border="0" cellpadding="0"
                           cellspacing="0" class="col-550" width="550">
                        <tbody>
                            <tr>
                                <td align="center" style="background-color: #4c7bb9;
                                           height: 50px;">
 
                                    <a href="#" style="text-decoration: none;">
                                        <p style="color:white;
                                                  font-weight:bold;">
                                            Онлайн-помощник студента ВШЭ
                                        </p>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr style="height: 300px;">
                <td align="center" style="border: none;
                           border-bottom: 2px solid #4c6eb9; 
                           padding-right: 20px;padding-left:20px">
                    <img src="../../src/resources/img/thanks.png" alt="">
                    <p style="font-weight: bolder;font-size: 42px;
                              letter-spacing: 0.025em;
                              color:black;">
                        Привет, $name
                        <br> $sub
                    </p>
                </td>
            </tr>
 
            <tr style="display: inline-block;">
                <td style="height: 150px;
                           padding: 20px;
                           border: none; 
                           background-color: white;">
                   
                    <h2 style="text-align: left;
                               align-items: center;">
                        Информация
                   </h2>
                    <p class="data"
                       style="text-align: justify-all;
                              align-items: center; 
                              font-size: 15px;
                              padding-bottom: 12px;">
                        $info  
                    </p>
                    <p>
                        <a href=
"$link"
                           style="text-decoration: none; 
                                  color:white; 
                                  border: 2px solid #fff; 
                                  padding: 10px 30px;
                                  background: #4c6eb9;
                                  font-weight: bold;
                                  border-radius: 1rem;"> 
                           $butt
                      </a>
                      
                    </p>
                </td>
            </tr>
            <tr style="border: none; 
            background-color: #4c69b9; 
            height: 40px; 
            color:white; 
            padding-bottom: 20px; 
            text-align: center;">
                
<td height="40px" align="center">
    <p style="color: #4c6eb9; 
    line-height: 1.5em;">
    GeeksforGeeks
    </p>
    <a href="#" 
    style="border:none;
           text-decoration: none; 
           padding: 5px;"> 
           

    
    <a href="#"
    style="border:none;
    text-decoration: none; 
    padding: 5px;"> 
    
    
    </a>
    
    <a href="#" 
    style="border:none;
    text-decoration: none;
    padding: 5px;"> 
    
    
    </a>
</td>
</tr>
<tr>
<td style="font-family:'Open Sans', Arial, sans-serif;
           font-size:11px; line-height:18px; 
           color:#999999;" 
    valign="top"
    align="center">
<a href="#"
   target="_blank" 
   style="color:#999999; 
          text-decoration:underline;"></a>
            </td>
              </tr>
            </tbody></table></td>
        </tr>
        <tr>
          <td class="em_hide"
          style="line-height:1px;
                 min-width:700px;">
              <img alt="" 
              src="images/spacer.gif" 
              style="max-height:1px; 
              min-height:1px; 
              display:block; 
              width:700px; 
              min-width:700px;" 
              width="700"
              border="0" 
              height="1">
              </td>
        </tr>
        </tbody>
    </table>
</body>

EOD;
    return $htm;
}


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
        $mail->setFrom('hsehelper24@mail.ru', 'hsehelpers.ru');
        $mail->addAddress($email, $name);
        $mail->Subject = "Активация аккаунта";
        $body = makeMsg($name, "Активируй аккаунт", "Если вы не ожидали этого письма - просто проигнорируйте его", "Активировать", $href );
        $mail->msgHTML($body);
        return $mail->send();
}

function sendResetCode($email, $name, $href) : bool{
    global $htm;
    $mail = new PHPMailer;
    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPDebug = 0;
    $mail->Host = 'ssl://smtp.mail.ru';
    $mail->Port = 465;
    $mail->Username = 'hsehelper24@mail.ru';
    $mail->Password = 'UYfyksB720r4BpHnbwuG';
    $mail->setFrom('hsehelper24@mail.ru', 'hsehelpers.ru');
    $mail->addAddress($email, $name);
    $mail->Subject = "Смена пароля";
    $body = makeMsg("пользователь", "Установи новый пароль", "Если вы не ожидали этого письма - просто проигнорируйте его", "Сменить пароль", $href);
    $mail->msgHTML($body);
    return $mail->send();
}
?>