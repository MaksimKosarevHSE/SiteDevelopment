<?php
session_start();
include_once "../php/auth/getUserByToken.php";
closeAccessForAuthPages();
?>
<html>

<head>
    <meta charset="utf-8">
    <title>Регистрация</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
    <div class="login-root">
        <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
            <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
                <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
                    <h1><a href="" rel="dofollow">Регистрация</a></h1>
                </div>
                <div class="formbg-outer">
                    <div class="formbg">
                        
                        <div class="formbg-inner padding-horizontal--48">
                            <img src="../img/fon.png" alt="" class="reg_img" style="width: 100%; border-radius: 5%; padding-bottom: 5%;">
                            <br>
                            <span class="padding-bottom--15" style="text-align: center; font-size: 2rem; ">Успешно</span>
                            <div class="warning" style="background: rgba(47, 255, 61, 0.5);"><p style="margin-left: 1rem; ">Вы успешно зарегистрировались. Можете войти в свой аккаунт</p></div>
                            <form id="stripe-login">
                                <div class="field padding-bottom--24" style="margin-top: 3rem;">
                                    <a href="login.php"><div class="btn_sucsess"><p style="margin-top: 1.5%;">Перейти к входу</p></div></a>
                                </div>
                                <div class="field">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>