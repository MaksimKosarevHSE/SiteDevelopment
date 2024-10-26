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
    <title>Платформа «Онлайн-помощник студента ВШЭ» | Контакты</title>
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
            <a href="important.php">Важные объявления</a>
            <a href="achievements.php">Полезные материалы</a>
            <a href="contacts.php" class="active">Контакты</a>
        </nav>
    </header>
    <h2 class="title">О нас </h2>
    <p class="desc"></p>
    <div class="aboutUs">
        <div class="card-container">
            <img class="round" src="../src/resources/img/thanks.png" alt="user" />
            <h3>Антон Никаноров</h3>
            <h6>Студент 24КНТ9 ВШЭ НН</h6>
            <p>Фронт-энд разработчик<br/>дизайнер сайта</p>
            <div class="skills">
                <h6>Навыки</h6>
                <ul>
                    <li>UI / UX</li>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                </ul>
            </div>
        </div>
        <div class="card-container">
            <img class="round" src="../src/resources/img/thanks.png" alt="user" />
            <h3>Максим Косарев</h3>
            <h6>Студент 24КНТ9 ВШЭ НН</h6>
            <p>Бэк-энд разработчик<br/>серверная часть сайта</p>
            <div class="skills">
                <h6>Навыки</h6>
                <ul>
                    <li>PHP</li>
                    <li>SQL</li>
                    <li>Java</li>
                    <li>Python</li>
                    <li>JavaScript</li>
                </ul>
            </div>
        </div>
        <div class="card-container">
            <img class="round" src="../src/resources/img/thanks.png" alt="user" />
            <h3>Даниил Бабкин</h3>
            <h6>Студент 24КНТ9 ВШЭ НН</h6>
            <p>Руководитель проекта</p>
            <div class="skills">
                <h6>Навыки</h6>
                <ul>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>Photoshop</li>
                    <li>SMM management</li>
                </ul>
            </div>
        </div>
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