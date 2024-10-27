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
    <div class="loader_bg" style="margin-top: -15rem">
        <div class="loader"></div>
        <span class="loader__span">Загрузка данных...</span>
    </div>
    <header class="header">
    <a href="#account" class="logo"><img src="../src/resources/img/back_reg.png" alt="">
        <p><?php echo $user->getFirstName() ?></p></a>
    <nav>
        <a href="../home.php" >Главная</a>
        <a href="plan.php">Расписание</a>
        <a href="homework.php">Домашние задания</a>
        <a href="important.php">Важные объявления</a>
        <a href="achievements.php">Полезные материалы</a>
        <a href="contacts.php" class="active">Контакты</a>
    </nav>
    <div class="l">
        <button type="button" class="mobile-nav-button">
            <span class="mobile-nav-button__icon"></span>
        </button>
    </div>
</header>
<div class="mobile-nav">
    <nav class="mobile-nav-list">
        <ul>
            <li><a href="../home.php">Главная</a></li>
            <li><a href="plan.php">Расписание</a></li>
            <li><a href="homework.php">Домашние задания</a></li>
            <li><a href="important.php">Важные объявления</a></li>
            <li><a href="achievements.php">Полезные материалы</a></li>
            <li><a href="contacts.php">Контакты</a></li>
        </ul>
    </nav>
</div>
    <h2 class="title" style="margin-top: 15rem;">Контакты учебного офиса</h2>
    <p class="desc"></p>
    <div class="cont">
        <figure class="fir-image-figure">
            <a class="fir-imageover" rel="noopener" target="_blank" href="">
            <img class="fir-author-image fir-clickcircle" src="../src/resources/img/boris.jpg" alt="David East - Author" style="object-fit: cover;">
            <div class="fir-imageover-color"></div>
            </a>
        
            <figcaption>
            <div class="fig-author-figure-title">Улитин Борис Игоревич</div>
            <div class="fig-author-figure-desc">Академический руководитель</div>
            <div class="fig-author-figure-desc">e-mail: bulitin@hse.ru</div>
            </figcaption>
        </figure>
    </div>
    <div class="cont">
        <figure class="fir-image-figure">
            <a class="fir-imageover" rel="noopener" target="_blank" href="">
            <img class="fir-author-image fir-clickcircle" src="../src/resources/img/avseeva.jpg" alt="David East - Author" style="object-fit: cover;">
            <div class="fir-imageover-color"></div>
            </a>
        
            <figcaption>
            <div class="fig-author-figure-title">Асеева Наталья Владимировна</div>
            <div class="fig-author-figure-desc">Декан факультета ИМиКН</div>
            <div class="fig-author-figure-desc">e-mail: nvaseeva@hse.ru</div>
            </figcaption>
        </figure>
    </div>
    <div class="cont">
        <figure class="fir-image-figure">
            <a class="fir-imageover" rel="noopener" target="_blank" href="">
            <img class="fir-author-image fir-clickcircle" src="../src/resources/img/emelyanova.png" alt="David East - Author" style="object-fit: cover;">
            <div class="fir-imageover-color"></div>
            </a>
        
            <figcaption>
            <div class="fig-author-figure-title">Емельянова Мария Максимовна</div>
            <div class="fig-author-figure-desc">Начальник
                отдела сопровождения учебного процесса</div>
            <div class="fig-author-figure-desc">e-mail: memelyanova@hse.ru</div>
            <div class="fig-author-figure-desc">тел. 432-00-89</div>
            </figcaption>
        </figure>
    </div>
    <div class="cont">
        <figure class="fir-image-figure">
            <a class="fir-imageover" rel="noopener" target="_blank" href="">
            <img class="fir-author-image fir-clickcircle" src="../src/resources/img/polonec.jpg" alt="David East - Author" style="object-fit: cover;">
            <div class="fir-imageover-color"></div>
            </a>
        
            <figcaption>
            <div class="fig-author-figure-title">Полонецкая Наталья Александровна</div>
            <div class="fig-author-figure-desc">Заместитель начальника</div>
            <div class="fig-author-figure-desc">e-mail: nbakulina@hse.ru</div>
            <div class="fig-author-figure-desc">тел. 257-29-36</div>
            </figcaption>
        </figure>
    </div>
    <h2 class="title">О нас </h2>
    <p class="desc"></p>
    <div class="aboutUs">
        <div class="card-container">
            <img class="round" src="../src/resources/img/IMG_9223.PNG" alt="user" />
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
            <img class="round" src="../src/resources/img/maksim.png" alt="user" />
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
            <img class="round" src="../src/resources/img/daniel.jpg" alt="user" />
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
                <form action="../src/php/auth/email/exit.php" method="POST">
                    <button type="submit" class="popup_btn">Выйти
                    </button>
                </form>
            </div>
            </div>
        </div>
        <footer>
    <nav style="display: none;" id="navUnder1">
        <ul id="navUnder" style="">
            <li><a href="../home.php">Главная</a></li>
            <li><a href="plan.php">Расписание</a></li>
            <li><a href="homework.php">Домашние задания</a></li>
            <li><a href="important.php">Важные объявления</a></li>
            <li><a href="achievements.php">Полезные материалы</a></li>
            <li><a href="contacts.php">Контакты</a></li>
        </ul>
    </nav>
    <div id="foot"

         style="display: flex; justify-content: center; flex-direction: row; align-items: center;margin: auto auto;margin-top:70px;margin-bottom:10px">

        <address>
            <div id="address" style="display: flex; align-items: center;">

                <a href="https://vk.com/entity404" style="display: block; height: 30px; text-decoration: none;"><img
                            src="iconss/icons8-vk.svg" alt="" style="margin-right: 5px;width: 30px;margin-left:10px"></a>
                <a href="https://web.telegram.org/k/#@entity303"
                   style="display: block; height: 30px; text-decoration: none;"><img src="iconss/icons8-telegram.svg" alt=""
                                                                                     style="margin-right: 5px;width: 30px;"></a>
                <a href="mailto:maksakosarev@gmail.com" target="_blank"
                   style="display: block; height: 30px; text-decoration: none;"> <img src="iconss/icons8-gmail.svg" alt=""
                                                                                      style="width: 30px; margin-right: 10px;"></a>

            </div>
        </address>
        <a id="politicConf" style="font-family: 'Roboto', sans-serif; font-size:15px;color:rgb(119, 119, 119); text-decoration: none;"
           href="../politic.pdf">Политика конфиденциальности</a>

    </div>
</footer>
<style>

    footer{
        background-color: #294c997a;
        margin-top:0px  !important;
        margin-bottom: 0px !important;
        padding-bottom: 10px !important;
        opacity: 1;

    }
    #foot{
        flex-direction: column !important;
        margin-bottom: 0px !important;
        color:white !important;
        margin-top: 0px !important;
    }
    #politicConf{
        margin-top:5px;
        color:white !important
    }
    #copyright{
        margin-top:5px;
        color:white !important
    }
    #address{
        margin-top:30px;
    }


    #navUnder{
        padding-left:10%;
        padding-top:30px;
        list-style-type:none;
    }
    #navUnder li{
        font-family: 'Roboto', sans-serif;
        padding-top:15px;
        font-size: 17px;
        font-weight: 500;


    }
    #navUnder li a{
        text-decoration: none;
        color:white
    }
    .navMobile{
        display: flex !important;
        flex-direction: row;
        justify-content: space-between;
        display:  none !important;

    }

    /* эксперемент */
    @keyframes ope {
        0% {
            height: 0px;
            opacity:0.3;
        }
        100% {
            height: 230px;
            opacity: 1;

        }
    }

    #topBan, #bottBan{
        display:none !important
    }

    .hea{
        color:rgb(66, 66, 66)
    }
    .textToHea{
        color:rgb(53, 53, 53)
    }


    .introductionWindow{
        background-color: rgba(255, 255, 255, 0) !important;
        width:90% !important;
        border:0px;
    }
    .hea{
        margin-top:0px;
    }





    #firstArticle{
        background-color: rgb(255, 255, 255); border-radius: 15px;
        background-image: url(../firstGrad.jpg);
        background-repeat: no-repeat;


    }
    #firstArticle .hea{
        color: black !important;
    }
    #firstArticle .textToHea{
        color:#111111 !important;
    }







    #share{
        display: flex !important  ;
    }
    #textShare{
        display: block !important;
    }
    .goFirstLessonMobile{
        display: block !important;

    }

    #navUnder1{
        display: block !important;
    }


    #rightAside{
        display: flex !important;
        flex-direction: column !important;
    }

    #just{
        box-shadow: none;
        border: 2px solid rgb(211 227 255) !important;

    }
    #education, #practice{
        background-color: rgb(255, 208, 0);
        border:0px;
    }

    #education p, #practice p{
        font-weight: 500 !important;
        color:white !important;

    }

    #firstArticle{
        width:400px !important;
        max-width: 400px;
        width: auto !important;
    }
    #secondArticle{
        width:400px !important;
        max-width: 400px;
        width: auto !important;
    }
    #thirdArticle{
        width:100% !important;
    }
    #fourthArticle{
        width:100% !important;
    }
    #fivethArticle{
        width:100% !important;
    }
    #sixArticle{
        width:100% !important;
    }


    #mainSpace{
        width: 845px;
    }
    .goFirstLessonMobile{
        width:350px !important;
    }
    #textShare{
        font-family: 'Roboto', sans-serif;
        font-size: 16px;
        margin-bottom:30px;
        margin-top:50px
    }
    #education p, #practice p{
        font-size: 16px;
        margin-top:12px;
        color: #303030 !important;


    }
    #education,  #practice {


        width:160px;
        height: 45px;

        background-color: rgb(255, 255, 255) !important;
        box-shadow: 0px 0px 8px -1px rgba(34, 60, 80, 0.1);
        border:1px solid #b6b6b6;
    }
    #navUnder{
        display: flex;
        justify-content: center;
        padding-left:0px;
        margin-bottom: 15px;
        padding-top:40px;

    }
    #navUnder li{
        margin-right: 50px;
    }

    #navUnder :last-child{
        margin-right: 0px;
    }


    #share p img:hover{

        transform:scale(107%);
        transition-timing-function:cubic-bezier(.1, -1.5, .1, 4);
        transition-duration: 0.1s;
    }
    #mapOfKey{
        opacity: 0 ;
    }


    #just{
        border:0px !important;
        -webkit-box-shadow: 0px 0px 8px -1px rgba(34, 60, 80, 0.1);
        -moz-box-shadow: 0px 0px 8px -1px rgba(34, 60, 80, 0.1);
        box-shadow: 0px 0px 8px -1px rgb(34 60 80 / 26%);
        background-color: rgb(255, 255, 255);
        border:0px !important;
        height:300px;
        background-size: 250%;

    }



    .wrapUpPanel {
        height: 75px !important;
        margin-top: 0px !important;
    }
    .newNavUl a {
        color: rgb(71 71 71)

    }


    @media (max-width: 1000px) {
        .introductionWindow{
            border-radius: 0px;
        }

        .wrapUpPanel{
            margin-top:0px !important;
            display: block !important;
            z-index: 101;
            background-color: white;

        }
        #rightAside{
            display: none !important;
        }
        #topBan, #bottBan{
            width: 90% !important;
            /* background-color: rgba(255, 255, 255, 0) !important; */
            /* color:black !important; */

        }
        .textToHea{
            text-align: justify !important;
            padding-left:20px !important;
            padding-right: 20px !important;
        }

        .introductionWindow{
            width: 100% !important;
            margin-top:0px !important;
            border-top: 0px;
            display: block !important;
        }

        footer{
            background-color: #1B202B;
            margin-top:0px  !important;
            margin-bottom: 0px !important;
            padding-bottom: 10px !important;
            opacity: 1;

        }
        #foot{
            flex-direction: column !important;
            margin-bottom: 0px !important;
            color:white !important;
            margin-top: 0px !important;
        }
        #politicConf{
            margin-top:5px;
            color:white !important
        }
        #copyright{
            margin-top:5px;
            color:white !important
        }
        #address{
            margin-top:30px;
        }

        .goFirstLesson{
            margin-top:5%;
        }

        #navUnder{
            padding-left:10%;
            padding-top:30px;
            list-style-type:none;
        }
        #navUnder li{
            font-family: 'Roboto', sans-serif;
            padding-top:15px;
            font-size: 17px;
            font-weight: 500;


        }
        #navUnder li a{
            text-decoration: none;
            color:white
        }
        .navMobile{
            display: flex !important;
            flex-direction: row;
            justify-content: space-between;


        }
        .logoMobile{


        }

        /* эксперемент */
        @keyframes ope {
            0% {
                height: 0px;
                opacity:0.3;
            }
            100% {
                height: 230px;
                opacity: 1;

            }
        }

        #topBan, #bottBan{
            display:none !important
        }


        .textToHea{
            color:rgb(53, 53, 53)
        }



        /* checkpoint */

        #share{
            display: flex !important  ;
        }
        #textShare{
            display: block !important;
        }
        .goFirstLessonMobile{
            display: block !important;

        }

        #navUnder1{
            display: block !important;
        }
        #mainSpace{
            display:block !important;
            width:90% !important;
            margin: auto auto;

        }

        .goFirstLessonMobile {
            width:80% !important;

        }
        #wrapGoFirstLesson{
            margin-bottom:0px !important;
        }

        #navUnder{
            display: block;
            margin-bottom:0px;
        }

    }


    .showBurgerList{
        display: flex !important;
    }
</style>
    <script src="../src/js/burger.js"></script>
    <script src="../src/js/preloader.js"></script>
    <script>setTimeout(function(){
        $('.loader_bg').fadeToggle();
    }, 1500);
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>