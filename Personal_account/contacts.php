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
    <div class="contant">
    <div class="flex items-center justify-center min-h-screen bg-white py-48">
        <div class="flex flex-col">
            <div class="flex flex-col mt-8">
                <div class="container max-w-7xl px-4">
                    <div class="flex flex-wrap justify-center text-center mb-24">
                        <div class="w-full lg:w-6/12 px-4">
                            <h1 class="text-gray-900 text-4xl font-bold mb-8">
                                Встречайте команду
                            </h1>
                            <p class="text-gray-700 text-lg font-light">
                                Которая трудилась над этим проектом
                            </p>
                        </div>
                    </div>
    
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-6/12 lg:w-3/12 mb-6 px-6 sm:px-6 lg:px-4">
                            <div class="flex flex-col">
                                <a href="#" class="mx-auto">
                                    <img class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                        src="../src/resources/img/thanks.png">
                                </a>
                                <div class="text-center mt-6">
                                    <h1 class="text-gray-900 text-xl font-bold mb-1">
                                        Максим Косарев
                                    </h1>
                                    <div class="text-gray-700 font-light mb-2">
                                        Бэк-энд
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="w-full md:w-6/12 lg:w-3/12 mb-6 px-6 sm:px-6 lg:px-4">
                            <div class="flex flex-col">
                                <a href="#" class="mx-auto">
                                    <img class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                        src="../src/resources/img/thanks.png">
                                </a>
                                <div class="text-center mt-6">
                                    <h1 class="text-gray-900 text-xl font-bold mb-1">
                                        Никаноров Антон
                                    </h1>
                                    <div class="text-gray-700 font-light mb-2">
                                        Фронт-енд
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="w-full md:w-6/12 lg:w-3/12 mb-6 px-6 sm:px-6 lg:px-4">
                            <div class="flex flex-col">
                                <a href="#" class="mx-auto">
                                    <img class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                        src="../src/resources/img/thanks.png">
                                </a>
                                <div class="text-center mt-6">
                                    <h1 class="text-gray-900 text-xl font-bold mb-1">
                                        Даниил Бабкин
                                    </h1>
                                    <div class="text-gray-700 font-light mb-2">
                                        Фул-стэк, тимлид
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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