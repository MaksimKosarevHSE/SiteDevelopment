<?php
session_start();
include_once "src/php/auth/getUserByToken.php";
closeAccessForAuthPages();


?>
<html>

<head>
    <meta charset="utf-8">
    <title>Изменение пароля</title>
    <link rel="stylesheet" type="text/css" href="src/css/style.css">
</head>

<body>
    <div class="loader_bg">
        <div class="loader"></div>
        <span class="loader__span">Загрузка данных...</span>
    </div>
    <div class="login-root">
        <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
            <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
                <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
                    <h1><a href="" rel="dofollow">Изменение пароля</a></h1>
                </div>
                <div class="formbg-outer">
                    <div class="formbg">
                        
                        <div class="formbg-inner padding-horizontal--48">
                            <img src="src/resources/img/reset.webp" alt="" class="reg_img" style="width: 100%; border-radius: 5%; padding-bottom: 5%;">
                            <br>
                            <span class="padding-bottom--15" style="text-align: center; font-size: 2rem; ">Успешно</span>
                            <div class="warning" style="background: rgba(47, 255, 61, 0.5);"><p style="margin-left: 1rem; ">Ваш пароль успешно изменен. Можете входить )</p></div>
                            <form id="stripe-login">
                                <div class="field padding-bottom--24" style="margin-top: 3rem;">
                                    <a href="login.php"><div class="btn_sucsess"><p style="margin-top: 1.5%;">Вернуться к входу</p></div></a>
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
    <script src="src/js/preloader.js"></script>
    <script>setTimeout(function(){
        $('.loader_bg').fadeToggle();
    }, 1500);
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>

</html>