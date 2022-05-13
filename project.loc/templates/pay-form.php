<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Дела в порядке</title>
    <link rel="stylesheet" href="/css/header.css?<?echo time();?>">
    <link rel="stylesheet" href="/css/pay-page.css?<?echo time();?>">
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
                <div class="main-group">
                    <input  id="name" class="first-name" type="text" placeholder=" " require autocomplete="off"  >
                    <label class = "first-label" for="name">full name</label>
                    <br/>
                    <input  id="number" class="number" type="text" placeholder=" " require autocomplete="off"  >
                    <label class = "second-label" for="number">number</label>
                </div>

                <div class="border-line-main"></div>

                <div class="our-order"><!-- название в верху правого блока -->
                    <div class="total-div"><p class="total">TOTAL</p></div>
                    <div class= "burger-photo-div"><img class= "burger-photo" src="/img/1.jpeg.jpg" alt=""></div> <!-- сразу под ним фото бургера (тянется из бд) -->
                    <div class="order-part"><p class="name-burg">BIG MAC</p> <!-- справа после фото название бургера (тянется из бд) -->
                    <p class="x">x</p> <!-- справа после названия знак умножения -->
                    <p class="order-sum">12</p> <!--справа после умножения число равное заказам этого бургера (из бд) -->
                    <p class="line">-</p> <!-- справа после числа знак дефис -->
                    <p class="price">250</p> <!-- справа после дефиса цена (из бд) -->
                    <p class="rub">RUB</p></div> <!-- справа после дефиса цена (из бд) -->
                    <div class="line-border">----------------</div> <!-- линия границы -->
                    <div class="total-sum">250 <!-- общая цена, соединяет цены заказа и считает-->
                        <div class="total-rub">RUB</div>
                    </div> 
                    <div class="button-pay" ><button class="main-button">PAY</button></div> <!--  -->
                </div>

            </div>
            </main>
        
</div>
<footer>
    
</footer>

<!-- js скрипт если надо -->
</body>
</html>