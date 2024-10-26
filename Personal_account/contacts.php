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
        <a href="#" class="logo" ><img src="../src/resources/img/back_reg.png" alt=""></a>
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
    <script src="../src/js/preloader.js"></script>
    <script>setTimeout(function(){
        $('.loader_bg').fadeToggle();
    }, 1500);
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>