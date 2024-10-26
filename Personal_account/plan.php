<?php
include_once "../src/php/auth/getUserByToken.php";
$user = getUserByTokenOrRedirect();
$group = "knt9";
if ($user->getGroup() != null){
    $group = "knt" . $user->getGroup();
}

require_once "../src/php/parser/parse.php";
$plan = json_decode(getPlan());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../src/css/main.css">
    <link rel="stylesheet" href="../src/resources/fonts/Georgia/stylesheet.css" />
    <link rel="stylesheet" href="../src/resources/fonts/Lato/stylesheet.css" />
    <script>
        var planFromServer= <?php print_r(json_encode($plan, JSON_UNESCAPED_UNICODE)) ?>;
    </script>
    <title>Платформа «Онлайн-помощник студента ВШЭ» | Расписание</title>
</head>
<body>
<style>
    tbody{
        white-space: normal;
    }
</style>
<div class="loader_bg">
    <div class="loader"></div>
    <span class="loader__span">Загрузка данных...</span>
</div>
<header class="header">
    <a href="#account" class="logo" ><img src="../src/resources/img/back_reg.png" alt=""><p><?php echo $user->getFirstName()?></p></a>
    <nav>
        <a href="../home.php" >Главная</a>
        <a href="plan.php" class="active">Расписание</a>
        <a href="homework.php">Домашние задания</a>
        <a href="important.php">Важные объявления</a>
        <a href="achievements.php">Полезные материалы</a>
        <a href="contacts.php">Контакты</a>
    </nav>
</header>
<section class="home">
    <div class="container">
        <h2 class="title">Расписание</h2>
        <div class="group_select">
            <a href="../src/php/parser/changeGroup.php?group=1" class="ref_group"><div class="group_number">Группа 1</div></a>
            <a href="../src/php/parser/changeGroup.php?group=2" class="ref_group"><div class="group_number">Группа 2</div></a>
            <a href="../src/php/parser/changeGroup.php?group=3" class="ref_group"><div class="group_number">Группа 3</div></a>
            <a href="../src/php/parser/changeGroup.php?group=4" class="ref_group"><div class="group_number">Группа 4</div></a>
            <a href="../src/php/parser/changeGroup.php?group=5" class="ref_group"><div class="group_number">Группа 5</div></a>
            <a href="../src/php/parser/changeGroup.php?group=6" class="ref_group"><div class="group_number">Группа 6</div></a>
            <a href="../src/php/parser/changeGroup.php?group=7" class="ref_group"><div class="group_number">Группа 7</div></a>
            <a href="../src/php/parser/changeGroup.php?group=8" class="ref_group"><div class="group_number">Группа 8</div></a>
            <a href="../src/php/parser/changeGroup.php?group=9" class="ref_group"><div class="group_number">Группа 9</div></a>
        </div>
        <p class="desc">Понедельник</p>
        <p class="desc"></p>
        <p class="lyvovka p1">Ура, начало учёбы!</p>
        <div class="containert mtb-3">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Время занятий</th>
                        <th>Название предмета</th>
                        <th>Кабинет</th>
                    </tr>
                    </thead>
                    <tbody id="mon">

                    </tbody>
                </table>
            </div>




            <p class="desc">Вторник</p>
            <p class="desc"></p>
            <p class="lyvovka p2">Не унывай!</p>
            <div class="containert mtb-3">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Время занятий</th>
                            <th>Название предмета</th>
                            <th>Кабинет</th>
                        </tr>
                        </thead>
                        <tbody id="tue">

                        </tbody>
                    </table>
                </div>




                <p class="desc">Среда</p>
                <p class="desc"></p>
                <p class="lyvovka p3">Ботаем, ботаем и еще раз ботаем!</p>
                <div class="containert mtb-3">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Время занятий</th>
                                <th>Название предмета</th>
                                <th>Кабинет</th>
                            </tr>
                            </thead>
                            <tbody id="wen">

                            </tbody>
                        </table>
                    </div>




                    <p class="desc">Четверг</p>
                    <p class="desc"></p>
                    <p class="lyvovka p4">Пятница близко!</p>
                    <div class="containert mtb-3">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Время занятий</th>
                                    <th>Название предмета</th>
                                    <th>Кабинет</th>
                                </tr>
                                </thead>
                                <tbody id="thur">

                                </tbody>
                            </table>
                        </div>



                        <p class="desc">Пятница</p>
                        <p class="desc"></p>
                        <p class="lyvovka p5">Ура, пятница!</p>
                        <div class="containert mtb-3">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Время занятий</th>
                                        <th>Название предмета</th>
                                        <th>Кабинет</th>
                                    </tr>
                                    </thead>
                                    <tbody id="fri">

                                    </tbody>
                                </table>
                            </div>


                            <p class="desc">Суббота</p>
                            <p class="desc"></p>
                            <p class="lyvovka p6">Мы дожили!</p>
                            <div class="containert mtb-3">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Время занятий</th>
                                            <th>Название предмета</th>
                                            <th>Кабинет</th>
                                        </tr>
                                        </thead>
                                        <tbody id="sut">

                                        </tbody>
                                    </table>
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
                                            <p style="margin-bottom: 2rem;">Группа: <a href="" class="aant"><?php echo $user->getGroup() == null ? "выбрать" : "24кнт" . $user->getGroup()?></a></p>
                                            <p style="margin-bottom: 2rem;">Почта: <a href="" class="aant"><?php echo $user->getEmail()?></a></p>
                                        </div>
                                    </div>
                                </div>
</section>
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
<script>
    $(function(){
        time = {
            1 : "08:00 - 09:20",
            2 : "09:30 - 10:50",
            3 : "11:10 - 12:30",
            4 : "13:00 - 14:20",
            5 : "14:40 - 16:00",
            6 : "16:20 - 17:40",
            7 : "18:10 - 19:30",
            8 : "19:40 - 21:00"
        }
        group = <?php echo "\"" . $group . "\""?>;

        $("[href='../src/php/parser/changeGroup.php?group=<?php echo $user->getGroup() == null ? 9 : $user->getGroup() ?>']").addClass("activeh");


        if (planFromServer.length !== 0){
            {
                pl = planFromServer["mon"][group];
                for (i = 0; i < pl.lessons.length; i++) {
                    if (pl.lessons[i] !== "") {
                        html = `
                     <tr>
                        <td>${time[i + 1]}</td>
                        <td>${pl.lessons[i]}</td>
                        <td>${pl.audit[i]}</td>
                    </tr>
                    `;
                        $("#mon").append(html);


                    }
                }
            }



            {
                pl = planFromServer["tue"][group];
                for (i = 0; i < pl.lessons.length; i++) {
                    if (pl.lessons[i] !== "") {
                        html = `
                     <tr>
                        <td>${time[i + 1]}</td>
                        <td>${pl.lessons[i]}</td>
                        <td>${pl.audit[i]}</td>
                    </tr>
                    `;
                        $("#tue").append(html);


                    }
                }
            }


            {
                pl = planFromServer["wen"][group];
                for (i = 0; i < pl.lessons.length; i++) {
                    if (pl.lessons[i] !== "") {
                        html = `
                     <tr>
                        <td>${time[i + 1]}</td>
                        <td>${pl.lessons[i]}</td>
                        <td>${pl.audit[i]}</td>
                    </tr>
                    `;
                        $("#wen").append(html);


                    }
                }
            }


            {
                pl = planFromServer["thur"][group];
                for (i = 0; i < pl.lessons.length; i++) {
                    if (pl.lessons[i] !== "") {
                        html = `
                     <tr>
                        <td>${time[i + 1]}</td>
                        <td>${pl.lessons[i]}</td>
                        <td>${pl.audit[i]}</td>
                    </tr>
                    `;
                        $("#thur").append(html);


                    }
                }
            }

            {
                pl = planFromServer["fri"][group];
                for (i = 0; i < pl.lessons.length; i++) {
                    if (pl.lessons[i] !== "") {
                        html = `
                     <tr>
                        <td>${time[i + 1]}</td>
                        <td>${pl.lessons[i]}</td>
                        <td>${pl.audit[i]}</td>
                    </tr>
                    `;
                        html2 = html.replaceAll("\n", "<br>");
                        $("#fri").append(html);

                    }
                }
            }

            {
                pl = planFromServer["sut"][group];
                for (i = 0; i < pl.lessons.length; i++) {
                    if (pl.lessons[i] !== "") {
                        html = `
                     <tr>
                        <td>${time[i + 1]}</td>
                        <td>${pl.lessons[i]}</td>
                        <td>${pl.audit[i]}</td>
                    </tr>
                    `;
                        $("#sut").append(html);
                    }
                }
            }
        }

    });

</script>
<script src="../src/js/preloader.js"></script>
<script>setTimeout(function(){
        $('.loader_bg').fadeToggle();
    }, 1500);
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>
