<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../src/css/main.css">
    <link rel="stylesheet" href="../src/resources/fonts/Georgia/stylesheet.css" />
	<link rel="stylesheet" href="../src/resources/fonts/Lato/stylesheet.css" />
    <title>Платформа «Онлайн-помощник студента ВШЭ» | Важные объявления</title>
</head>
<body>
    <div class="loader_bg">
        <div class="loader"></div>
        <span class="loader__span">Загрузка данных...</span>
    </div>
<header class="header">
        <a href="#account" class="logo" ><img src="../src/resources/img/back_reg.png" alt=""><p>Имя</p></a>
        <nav>
            <a href="../home.php" >Главная</a>
            <a href="plan.php">Расписание</a>
            <a href="homework.php">Домашние задания</a>
            <a href="important.php" class="active">Важные объявления</a>
            <a href="achievements.php">Полезные материалы</a>
            <a href="contacts.php">Контакты</a>
        </nav>
    </header>
    
    <div class="containera">
            <h2 class="title">Важная информация</h2>
            <p class="desc" >Здесь вы можете прочитать важные обьявления от старосты.</p>
            <div class="cardi">
                    <a class="card__a" href="#popup1">
                        <div class="card__item">
                            <div class="card__cover">
                                <img src="../src/resources/img/card.jpg" class="card__img" alt="">
                            </div>
                            <div class="card__info">
                                <p class="card__nick">
                                    Выдача стипендии
                                </p>
                                <p class="card__disc">
                                    На этой неделе состоится выдача стипендиальных карт по расписанию.</p>
                                </p>
                            </div>
                        </div>
                    </a>
                <a class="card__a" href="#popup2">
                    <div class="card__item">
                        <div class="card__cover">
                            <img src="../src/resources/img/diskretnaya.png" class="card__img" alt="">
                        </div>
                        <div class="card__info">
                            <p class="card__nick">
                                КР Дискретная математика
                            </p>
                            <p class="card__disc">
                                В  этот понедельник состоится контрольная по дискретной математике   
                            </p>
                                </div>
                    </div>
                </a>
                <a class="card__a" href="#popup3">
                    <div class="card__item">
                        <div class="card__cover">
                            <img src="../src/resources/img/session.webp" class="card__img" alt="">
                        </div>
                        <div class="card__info">
                            <p class="card__nick">
                                Расписание сессий
                            </p>
                            <p class="card__disc">
                                 Вы можете ознакомиться с расписанием сессионной недели
                            </p>
                                </div>
                    </div>
                </a>
        </div>
    </div>

    <div id="account" class="popup">
            <a href="#header" class="popup__area"></a>
            <div class="popup__body account__body">
                <div class="popup__content account__content">
                    <a href="#header" class="popup__close">Х</a>
                    <div class="popup__title"><img class="popup__img account__img" src="../src/resources/img/back_reg.png"  alt="Slider item" /></div>
                    <div class="popup__title account__title">Имя пользователя<br></div>
                    <div class="popup__text account__text">
                        <p style="margin-bottom: 2rem;">Группа: <a href="" class="aant">24кнт9</a></p>
                        <p style="margin-bottom: 2rem;">Почта: <a href="" class="aant">mail</a></p>
                    </div>
                </div>
    </div>
    <div id="popup1" class="popup">
        <a href="#header" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="#header" class="popup__close">Х</a>
                <div class="popup__title"><img class="popup__img" src="../src/resources/img/card.jpg" alt="Slider item" /></div>
                <div class="popup__title">Выдача стипендии<br></div>
                <div class="popup__text"><p>На этой неделе состоится выдача стипендиальных карт по расписанию.</p></div>
        </div>
    </div>
    <div id="popup23" class="popup">
        <a href="#header" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="#header" class="popup__close">Х</a>
                <div class="popup__title"><img class="popup__img" src="../src/resources/img/diskretnaya.png" alt="Slider item" /></div>
                <div class="popup__title">КР Дискретная математика<br></div>
                <div class="popup__text"><p>В  этот понедельник состоится контрольная по дискретной математике</p></div>
        </div>
    </div>
    <div id="popup3" class="popup">
        <a href="#header" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="#header" class="popup__close">Х</a>
                <div class="popup__title"><img class="popup__img" src="../src/resources/img/session.webp" alt="Slider item" /></div>
                <div class="popup__title">Расписание сессий<br></div>
                <div class="popup__text"><p>Вы можете ознакомиться с расписанием сессионной недели</p></div>
        </div>
    </div>
    <script src="../src/js/preloader.js"></script>
    <script>setTimeout(function(){
            $('.loader_bg').fadeToggle();
        }, 1500);
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>