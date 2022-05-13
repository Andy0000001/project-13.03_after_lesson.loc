<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Дела в порядке</title>
    <link rel="stylesheet" href="/css/header.css?<?echo time();?>">
    <link rel="stylesheet" href="/css/choise-page.css?<?echo time();?>">
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
            <div class="card">  <!-- Карточка инфа должна браться из бд в строке по три карточки 3 столбика-->
                <a class="burg-title" href="/about_burger.php"> BIG MAC </a>
                <img class = "burg-photo" src="/img/1.jpeg.jpg"/>
                <div class="card-border-line"></div>
                <p class="price"> 500 RUB</p>
            </div>
            </main>
        
</div>
<footer>
    
</footer>

<!-- js скрипт если надо -->
</body>
</html>