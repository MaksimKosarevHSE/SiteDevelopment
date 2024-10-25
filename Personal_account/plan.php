<?php
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

    <header class="header">
        <a href="#" class="logo" ><img src="../src/resources/img/back_reg.png" alt=""></a>
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

            <p class="desc">Понедельник</p>
                    <p class="desc"></p>
                    <p class="lyvovka">Ура, начало учёбы!</p>
                    <div class="containert mtb-3">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Время занятий</th>
                                    <th>Название предмета</th>
                                </tr>
                                </thead>
                                <tbody id="mon">
                                <tr>
                                    <td>9:30-10:50</td>
                                    <td>Математический анализ</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>




                        <p class="desc">Вторник</p>
                        <p class="desc"></p>
                        <p class="lyvovka">Не унывай!</p>
                        <div class="containert mtb-3">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Время занятий</th>
                                        <th>Название предмета</th>
                                    </tr>
                                    </thead>
                                    <tbody id="tue">
                                    <tr>
                                        <td>9:30-10:50</td>
                                        <td>Математический анализ</td>
                                    </tr>
                                    <tr>
                                        <td>11:10-12:30</td>
                                        <td>Дискретная математика</td>
                                    </tr>
                                    <tr>
                                        <td>13:00-14:20</td>
                                        <td>Линейная алгебра и геометрия</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>




                            <p class="desc">Среда</p>
                            <p class="desc"></p>
                            <p class="lyvovka">Ботаем, ботаем и еще раз ботаем!</p>
                            <div class="containert mtb-3">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Время занятий</th>
                                            <th>Название предмета</th>
                                        </tr>
                                        </thead>
                                        <tbody id="third">
                                        <tr>
                                            <td>9:30-10:50</td>
                                            <td>Математический анализ</td>
                                        </tr>
                                        <tr>
                                            <td>11:10-12:30</td>
                                            <td>Дискретная математика</td>
                                        </tr>
                                        <tr>
                                            <td>13:00-14:20</td>
                                            <td>Линейная алгебра и геометрия</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>




                                <p class="desc">Четверг</p>
                                <p class="desc"></p>
                                <p class="lyvovka">Пятница близко!</p>
                                <div class="containert mtb-3">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Время занятий</th>
                                                <th>Название предмета</th>
                                            </tr>
                                            </thead>
                                            <tbody id="thur">
                                            <tr>
                                                <td>9:30-10:50</td>
                                                <td>Математический анализ</td>
                                            </tr>
                                            <tr>
                                                <td>11:10-12:30</td>
                                                <td>Дискретная математика</td>
                                            </tr>
                                            <tr>
                                                <td>13:00-14:20</td>
                                                <td>Линейная алгебра и геометрия</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>



                                    <p class="desc">Пятница</p>
                                    <p class="desc"></p>
                                    <p class="lyvovka">Ура, пятница!</p>
                                    <div class="containert mtb-3">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>Время занятий</th>
                                                    <th>Название предмета</th>
                                                </tr>
                                                </thead>
                                                <tbody id="fri">
                                                <tr>
                                                    <td>9:30-10:50</td>
                                                    <td>Математический анализ</td>
                                                </tr>
                                                <tr>
                                                    <td>11:10-12:30</td>
                                                    <td>Дискретная математика</td>
                                                </tr>
                                                <tr>
                                                    <td>13:00-14:20</td>
                                                    <td>Линейная алгебра и геометрия</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>


                                        <p class="desc">Суббота</p>
                                        <p class="desc"></p>
                                        <p class="lyvovka">Мы дожили!</p>
                                        <div class="containert mtb-3">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th>Время занятий</th>
                                                        <th>Название предмета</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="sut">
                                                    <tr>
                                                        <td>9:30-10:50</td>
                                                        <td>Математический анализ</td>
                                                    </tr>
                                                    <tr>
                                                        <td>11:10-12:30</td>
                                                        <td>Дискретная математика</td>
                                                    </tr>
                                                    <tr>
                                                        <td>13:00-14:20</td>
                                                        <td>Линейная алгебра и геометрия</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>


                                        </div>
                                        <div id="d123"></div>
    </section>
<script>
    $(function(){
        group = "knt9";
        if (planFromServer.length != 0){
            localPlan = planFromServer["mon"]["knt9"];
            console.log(localPlan);
        }
        $("#d123").append();
    });

</script>
</body>
</html>

