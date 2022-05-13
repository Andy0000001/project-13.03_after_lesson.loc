<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Дела в порядке</title>
    <link rel="stylesheet" href="/css/header.css?<?echo time();?>">
    <link rel="stylesheet" href="/css/burger-page.css?<?echo time();?>">
</head>

<body>
<div class="page-wrapper">
<header>
            <nav class="main-navigation"></nav>
            <div class="order-items">
                <div class="main-logo">Custom Burgers</div>
                <div class="photo-header" ><img class="header-photo" src="/img/6.jpeg" alt=""></div><!-- Лого должно быть слева + отступ слева от границы --> 
           </div>
           <div class="border-line"></div>
           </nav>
        </header>

        <main>
            <div id="about-main-conteiner">  <!-- Контейнер -->
                <img class="burg-photo" src="/img/3.jpeg.jpg"/> <!-- фото(слева) грузиться из бд, того бургера на который будет клик по id -->
                    <div class="name-price">
                        <p class="name" >BIG MAC</p> <!--  название(справа) грузиться из бд, того бургера на который будет клик по id-->
                        <div class="card-border-line"></div> <!-- стандартно -->
                            <p class="price"> 500 RUB</p> <!-- стандартно  -->
                        </div>
                            <div class="about" >
                                <p class="about"> Subscribe :<p>
                                <p class="about-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, fuga.</p><!--  описание(внизу) грузиться из бд, того бургера на который будет клик по id-->
                                <a href="/pay.php"><button href= "" class="main-button"> ORDER </button> <!-- стандартно  --></a>
                            </div>
                        
            </div>
        </main>
        
</div>
<footer>
    
</footer>

<!-- js скрипт если надо -->
</body>
</html>