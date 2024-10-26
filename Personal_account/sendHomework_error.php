<?php
session_start();
include_once "../src/php/auth/getUserByToken.php";
$user = getUserByTokenOrRedirect();
?>
<html>

<head>
    <meta charset="utf-8">
    <title>Отправка ДЗ</title>
    <link rel="stylesheet" type="text/css" href="../src/css/style.css">
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
                <h1><a href="" rel="dofollow">Отправка ДЗ</a></h1>
            </div>
            <div class="formbg-outer">
                <div class="formbg">
                    <div class="formbg-inner padding-horizontal--48">
                        <br>
                        <span class="padding-bottom--15" style="text-align: center; font-size: 2rem; ">Ошибка</span>
                        <form id="stripe-login">
                            <div class="field padding-bottom--24" style="margin-top: 3rem;">
                                <a href="../home.php"><div class="btn_sucsess"><p style="margin-top: 1.5%;">Вернуться в кабинет</p></div></a>
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

