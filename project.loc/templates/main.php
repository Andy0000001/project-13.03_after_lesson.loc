<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Дела в порядке</title>
    <link rel="stylesheet" href="/css/header.css?<?echo time();?>">
    <link rel="stylesheet" href="/css/main-page.css?<?echo time();?>">
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
                <img class="main-burg" src="/img/2.jpeg.jpg" alt=""> <!-- бургер -->
                <div class="right-menu">
                <a class="menu" href="/menu.php">MENU</a>
                <div class="sircle">
                    <div class="part part-lt"></div>
                    <div class="part part-rt"></div>
                    <div class="part part-ld"></div>
                    <div class="part part-rd"></div>
                </div>
                <button class="main-button">Spin & Order</button> <!-- Переход на другую страницу вместе с выводом выповшей скидки в таблицы для того что бы достать ее, возможно сделать через ссылку ?? -->
                <a class="about-us" href="">ABOUT US</a>
                </div>
            </main>
        
</div>
<footer>
    
</footer>

<!-- js скрипт если надо -->
</body>
</html>