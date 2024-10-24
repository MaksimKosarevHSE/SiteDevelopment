<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/main.css">
    <link rel="stylesheet" href="../css/fonts/Georgia/stylesheet.css" />
	<link rel="stylesheet" href="../css/fonts/Lato/stylesheet.css" />
    <title>Платформа «Онлайн-помощник студента ВШЭ» | Полезные материалы</title>
</head>
<body>
    <header class="header">
        <a href="#" class="logo" ><img src="../../img/back_reg.png" alt=""></a>
        <nav>
            <a href="../main.html" >Главная</a>
            <a href="plan.html">Расписание</a>
            <a href="homework.html">Домашние задания</a>
            <a href="important.html" >Важные объявления</a>
            <a href="achievements.html" class="active">Полезные материалы</a>
            <a href="contacts.html">Контакты</a>
        </nav>
    </header>
    <h2 class="title">Материалы</h2>
    <p class="desc">Книги, сборники, конспекты, презентации - все что нужно для счастливой жизни</p>
    <div class="masonry">
      <div class="grid">
        <img src="../../img/66010085.jpg">
        <div class="grid__body">
          <div class="relative">
            <a class="grid__link" href="../../img/book_discr.jpg" ></a>
            <h1 class="grid__title">Сборник по <br>дискретной математике</h1>
            <p class="grid__author"></p>
            <div class="text"></div>
          </div>
          <div class="mt-auto" >
            <span class="grid__tag main__btn main__btn__gradient">Скачать</span>
          </div>
        </div>
      </div>
      <div class="grid">
        <img src="../../img/1008791524.jpg">
        <div class="grid__body">
          <div class="relative">
            <a class="grid__link" href="../../../../images/3-15.pdf" ></a>
            <h1 class="grid__title"></h1>
            <p class="grid__author"></p>
          </div>
          <div class="mt-auto" >
            <span class="grid__tag main__btn main__btn__gradient">Скачать</span>
          </div>
        </div>
      </div>
      <div class="grid">
        <img src="../../img/3720732_910746.jpg">
        <div class="grid__body">
          <div class="relative">
            <a class="grid__link" href="../../../../images/3-15.pdf" ></a>
            <h1 class="grid__title">Линейная алгебра <br> </h1>
            <p class="grid__author"></p>
          </div>
          <div class="mt-auto" >
            <span class="grid__tag main__btn main__btn__gradient">Скачать</span>
          </div>
        </div>
      </div>
      <div class="grid">
        <img src="../../img/in23SaGLHvUIyGchsl45vnK5Dc7wKu7YuPfS7jw-ZO4enTDqDbejpNYbQZWQSuvrWm8CLyTI4Pxo361Xukyt-oWR.jpg">
        <div class="grid__body">
          <div class="relative">
            <a class="grid__link" href="../../files/14-10-2024.pdf" ></a>
            <h1 class="grid__title">Конспекты по линалу</h1>
            <p class="grid__author"></p>
          </div>
          <div class="mt-auto" >
            <span class="grid__tag main__btn main__btn__gradient">Скачать</span>
          </div>
        </div>
      </div>
      <div class="grid">
        <img src="../../img/diskretnaya.png">
        <div class="grid__body">
          <div class="relative">
            <a class="grid__link" href="../../../../images/3-15.pdf" ></a>
            <h1 class="grid__title">Презентации по дискретной математике<br></h1>
            <p class="grid__author"></p>
          </div>
          <div class="mt-auto" >
            <span class="grid__tag main__btn main__btn__gradient">Скачать</span>
          </div>
        </div>
      </div>
      <div class="grid">
        <img src="../../img/forget.jpg" style="">
        <div class="grid__body">
          <div class="relative">
           <a class="grid__link" href="../../../../images/3-15.pdf"></a>
            <h1 class="grid__title">Сюрприз</h1>
            <p class="grid__author"></p>
          </div>
          <div class="mt-auto" >
            <span class="grid__tag main__btn main__btn__gradient">Скачать</span>
          </div>
        </div>
      </div> 
    </div> 
<script>  
    let desc = document.querySelector('.description')
    sliderMain.on('slideChange', e => {
        sliderMain.activeIndex > 0 ? desc.classList.add('hidden') : desc.classList.remove('hidden')
    })

    (function() {
        var $grid = $('.grid').imagesLoaded(function() {
        $('.site__wrapper').masonry({
            itemSelector: '.grid'
        });
        });
    })();
</script>
</body>

</html>