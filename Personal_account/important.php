<?php
session_start();
include_once "../src/php/auth/getUserByToken.php";
$user = getUserByTokenOrRedirect();
?>
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
        <a href="#account" class="logo" ><img src="../src/resources/img/back_reg.png" alt=""><p><?php echo $user->getFirstName()?></p></a>
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
                <div class="popup__title account__title"><?php echo $user->getFirstName() . " " . $user->getLastName()?><br></div>
                <div class="popup__text account__text">
                    <p style="margin-bottom: 2rem;">Группа: <a href="<?php echo $user->getGroup() == null ? "plan.php" : ""?>" class="aant"><?php echo $user->getGroup() == null ? "выбрать" : "24кнт" . $user->getGroup()?></a></p>
                    <p style="margin-bottom: 2rem;">Почта: <a href="" class="aant"><?php echo $user->getEmail()?></a></p>
                </div>
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
    </div>
    <div id="popup2" class="popup">
        <a href="#header" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="#header" class="popup__close">Х</a>
                <div class="popup__title"><img class="popup__img" src="../src/resources/img/diskretnaya.png" alt="Slider item" /></div>
                <div class="popup__title">КР Дискретная математика<br></div>
                <div class="popup__text"><p>В  этот понедельник состоится контрольная по дискретной математике</p></div>
        </div>
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
    </div>
    <footer style="background: rgb(24, 54, 118);">
      <nav style="display:none; flex-direction: row; width: 80%; align-items: center;" id="navUnder1">
        <ul id="navUnder" style="">
          <li><a href="https://few-types.ru">Главная</a></li>
          <li><a href="education.html">Обучение</a></li>
          <li><a href="practice.html">Практика</a></li>
          <li><a href="forBeginners.html">Для новичков</a></li>
          <li><a href="aboutUs.html">О сайте</a></li>
          <li><a href="communication.html">Связь с нами</a></li>
        </ul>
      </nav>
    <div id="foot"
      
      style="display: flex; justify-content: center; flex-direction: row; align-items: center;margin: auto auto;margin-top:70px;margin-bottom:10px">
      
        <address>
      <div id="address" style="display: flex; align-items: center; font-size: 3rem; gap: 10rem; margin-bottom: 1.5rem;">
      
                <a href="#" style="color: white;"><i class="fa-brands fa-github"></i></a>
                <a href="#" style="color: white;"><i class="fa-brands fa-telegram"></i></a>
                <a href="#" style="color: white;"><i class="fa-brands fa-vk"></i></a>
                <a href="#" style="color: white;"><i class="fa-brands fa-youtube"></i></a>

      </div>
    </address>
      <a id="politicConf" style="font-size:1.4rem;color:rgb(119, 119, 119); text-decoration: none;"
        href="aboutUs.html">Политика конфиденциальности</a>
        <p id="copyright" style="font-size:1.4rem;color:rgb(119, 119, 119);font-style: normal;">Copyright @ few-types.ru, 2024</p>
    </div>
  </footer>
    <script src="../src/js/preloader.js"></script>
    <script>setTimeout(function(){
            $('.loader_bg').fadeToggle();
        }, 1500);
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>