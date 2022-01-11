<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mine dev</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="index.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="style.css">
<style>
body {
  margin: 0;
  font-family: 'Poppins', sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
  font-weight: 600;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #e9791e;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>

    <style>
        /* width */
        ::-webkit-scrollbar {
          width: 10px;
        }
        
        /* Track */
        ::-webkit-scrollbar-track {
          background: #f1f1f1; 
        }
         
        /* Handle */
        ::-webkit-scrollbar-thumb {
          background: #e9791e; 
        }
        
        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
          background: #555; 
        }

        .auth {
  font-family: 'Roboto', sans-serif;
  text-decoration: none;
  display: inline-flex;
  justify-content: center; 
  margin-top: -1.5em;
  color: 818181;
}
.auth-text:active,
.auth-text:hover{
  color: orange;
  transition: ease-in-out;
    transition-duration: 0.2s;
}
.auth-text{
  font-weight: 600;
    font-size: 17px;
    text-decoration: none;
    color: #a0a0a0;
    line-height: 25.5px;
}


        </style>

</head>
<body>


  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
   
    .logotype:hover{
    transform: scale(110%);
    transition: ease-in-out;
    transition-duration: 0.2s
   }
   .unlogo {
    font-family: 'Roboto', sans-serif;
    font-weight: 500;
    font-size: 20px;
    clear: both; 
     color: #818181;
     text-decoration: none; 
     display: inline-flex; 
     justify-content: center;  
     margin-top: 1.5em;
   }
   
  
    </style>


        <div class="w-100 h-5 p-3" style="background-image: url(img/stone.png); height: 134px">
      <div class="container">
    <div class="row mb-5 justify-content-center text-center" style="display: flex; justify-content: center">
    <div class="col-4" style="display: inline-block;justify-content: center; margin-top: 1.85em;">
    <div class="auth" style="padding-right: 20px;   color: 818181;"><a href="#" class="auth-text" style="text-decoration:none;">Задать вопрос     <ion-icon name="archive-outline" style="padding-left: 10px;"></ion-icon></a>

  </div>

    </div>
    <div class="col-4" style="display: flex; justify-content: center; margin-top: -1.5em;">
    <div><a href="#"> <img src="/img/logotype.png" class="logotype" style="display: flex; justify-content: center; max-with: 50%; max-height: 50%; transition: ease-in-out; transition-duration: 0.2s;"> </a> </div>

  
  </div>

    <div class="col-2 mr-auto" style="display: inline-block;justify-content: left; margin-top: 1.85em; ">
      <div class="auth" style="padding-left: 50px;   color: 818181;"><a href="#" class="auth-text" style="text-decoration:none;">Войти</a></div>
      </div>
      <div class="col-2 mr-auto" style="display: inline-block;justify-content: right; margin-top: 1.85em;">
      <div class="auth" style="padding-right: 20px;   color: 818181;"><a href="#" class="auth-text" style="text-decoration:none;">Регистрация</a></div>
    </div>


        </div>
      </div>
      </div>
      <div class="w-100 h-5 p-3" style="background-color: black; height: 78px">
      <div class="container">
    <div class="row row-cols-auto justify-content-md-center" style="display: flex; justify-content: center">
    

        </div>
      </div>
      </div>


        

<!--
<div class="hat-row">
<div class="container h-100">
<div class="row mb-5 align-items-center h-100">
  <div class="col-5">
    <div class="hat-h1" font-size="150px" style="font-weight: 600;">Создание игровых <br>проектов Minecraft</div>
    <p class="hat-h2">​Уникальные сборки, плагины , авто-донаты,<br> разработка сайтов и лаунчеров, все это — у нас.</p>
    <a href="#" class="myButton1">Подробнее об услугах</a>
    <a href="#goods" class="myButton">Товары</a>
    </div>
<div class="col-7" style="display: flex; justify-content: right;">

    <img src="img/main-logo.png" alt="" style="width: 550px; height: 550px">
    </div>
</div>

</div>
</div>

  -->


  <div class="jumbotron">
  <div class="container" style=" height: 800px">
    <div class="row" style=" height: 500px; padding-top: 150px">
        <div class="col-7" style="background-color: rgb(255, 208, 0);padding: 20px; " >
        <div class="head-text">Создание игровых<br> проектов Minecraft</div>
        <div class="head-text-low">Уникальные сборки, плагины , авто-донаты, разработка сайтов и лаунчеров, все это — у нас.</div>
        <button type="button" class="btn btn-light" style="height: 60px; width: 260px; border-radius: 18px; margin-top: 30px;
        font-family: 'Roboto', sans-serif; font-weight: 700; font-size: 18px;">Подробней об услугах</button>
        <button type="button" class="btn btn-dark" style="height: 60px; width: 170px; border-radius: 18px; margin-top: 30px; margin-left: 15px;
        font-family: 'Roboto', sans-serif; font-weight: 700; font-size: 18px;">Товары</button>
        <div class="row" style="display: flex; justify-content: left; padding-left: 10px; padding-top: 30px;">
        <div class="col-3" style=""><div class="head-text-1">700+</div></div>
        <div class="col-3" style=""><div class="head-text-1">5 лет</div></div>
        <div class="col-3" style=""><div class="head-text-1">500+</div></div>
        </div>
        <div class="row" style="display: flex; justify-content: left; padding-left: 10px; margin-top: -30px;">
            <div class="col-3" style=""><div class="head-text-low-1">Положительных <br>отзывов</div></div>
            <div class="col-3" style=""><div class="head-text-low-1">Успешной работы</div></div>
            <div class="col-3" style=""><div class="head-text-low-1">Завершенных <br>заказов</div></div>
            </div>
        </div>
        <div class="col-5" style="background-color: rgb(255, 208, 0); display: flex; justify-content: center;">
        <img src="img/main-logo.png" alt="" style="max-width: 500px; max-height: 500px;">
        </div>
    </div>
    </div>
    </div>




<div class="container">

<div class="row mb-5 justify-content-center text-center"  id="goods">
<div class="col-lg-8 col-md-10">
<h2 class="" style="margin-top: 60px; font-family: 'Roboto', sans-serif; font-weight: 800; font-size: 40px;">Лучшие услуги в сфере Minecraft</h2>
<div class="mt-2">
<p class="lead lh-180" style="margin-bottom: 60px; font-family: 'Roboto', sans-serif; font-weight: 600; font-size: 20px; color: grey;">Мы предлагаем широкий выбор различных услуг по разработке проектов Minecraft.<br>
Вы можете купить как обычный сервер майнкрафт, так и большой проект с сайтом и лаунчером.</p>
</div>
</div>
</div>

<h2 style="text-align: left; margin: 30px 0px 10px 62px; font-weight: 800; font-size: 40px;">ИГРОВЫЕ СБОРКИ</h2>
<h3 style="text-align: left; margin: 10px 0px 30px 62px; font-weight: 600; font-size: 20px; color: grey;">Готовые сборки — отличные цены! <br>Делать ничего не нужно: всё уже готово к запуску!</h3>

<div class="row row-cols-auto justify-content-md-center" style="display: flex; justify-content: center">





    <?php
    include "database.php";

    $result = mysqli_query($induction,"SELECT * FROM `donate`");


            
    $count = 1;


    while($tovar = mysqli_fetch_assoc($result)) { 
        if ($tovar['type'] == "sborka"){
          if ($count <= 4) {

        $count = $count + 1;
        ?>
<div class="col-2.5 mr-auto" style="display: inline-block">
        <a id="open<?php echo $count?>">
        
    <div class="product">
        <img src="<?php echo $tovar['image']?>" class="primg">
    </div>
</div>
    </a>

<?php
}
        }
    }
    ?>
    


</div>
    </div>
</div>
</div>
<div class="container">
<div class="row row-cols-auto justify-content-md-center" style="display: flex; justify-content: center">
<a type="button" class="btn btn-sm btn-primary mt-0 mb-4 waves-effect waves-light" href="http://mine-dev.store/setups.php" style="display: flex; justify-content: center; width: 200px; height: 60px; font-weight: 600; font-size: 20px; text-align: center; line-height: 50px; border-radius: 15px; background-color: orange; border: none">Посмотреть все</a>
  </div>
  </div>

  <div class="container">

<div class="row mb-5 justify-content-center text-center">
  <h2 style="text-align: left; margin: 30px 0px 10px 120px; font-weight: 800; font-size: 40px;">УНИКАЛЬНЫЙ ДИЗАЙН</h2>
<h3 style="text-align: left; margin: 10px 0px 30px 120px; font-weight: 600; font-size: 20px; color: grey;">Оформим быстро и недорого! <br>Лушие исполнители — для любимых клиентов!</h3>

<div class="row row-cols-auto justify-content-md-center" style="display: flex; justify-content: center">





    <?php
    include "database.php";

    $result = mysqli_query($induction,"SELECT * FROM `donate`");


            
    $count = 1;


    while($tovar = mysqli_fetch_assoc($result)) { 
        if ($tovar['type'] == "design"){
          if ($count <= 4) {

        $count = $count + 1;
        ?>
<div class="col-2.5 mr-auto" style="display: inline-block; overflow: visible;">
        <a id="open<?php echo $count?>">
        
    <div class="product" style="overflow: visible;">
        <img src="<?php echo $tovar['image']?>" class="primg" style="overflow: visible;">
    </div>
</div>
    </a>

<?php
}
        }
    }
    ?>
    


</div>
    </div>
</div>
</div>
<div class="container">
<div class="row row-cols-auto justify-content-md-center" style="display: flex; justify-content: center">
<a type="button" class="btn btn-sm btn-primary mt-0 mb-4 waves-effect waves-light" href="http://mine-dev.store/design.php" style="display: flex; justify-content: center; width: 200px; height: 60px; font-weight: 600; font-size: 20px; text-align: center; line-height: 50px; border-radius: 15px; background-color: orange; border: none">Посмотреть все</a>
  </div>
  </div>

  <div class="container">

<div class="row mb-5 justify-content-center text-center">
  <h2 style="text-align: left; margin: 30px 0px 10px 120px; font-weight: 800; font-size: 40px;">РАЗЛИЧНЫЕ УСЛУГИ</h2>
<h3 style="text-align: left; margin: 10px 0px 30px 120px; font-weight: 600; font-size: 20px; color: grey;">Подлатать сборку? Без проблем! <br>Фиксированные цены за конкретне услуги, без уловок.</h3>

<div class="row row-cols-auto justify-content-md-center" style="display: flex; justify-content: center">





    <?php
    include "database.php";

    $result = mysqli_query($induction,"SELECT * FROM `donate`");


            
    $count = 1;


    while($tovar = mysqli_fetch_assoc($result)) { 
        if ($tovar['type'] == "services"){
          if ($count <= 4) {

        $count = $count + 1;
        ?>
<div class="col-2.5 mr-auto" style="display: inline-block">
        <a id="open<?php echo $count?>">
        
    <div class="product">
        <img src="<?php echo $tovar['image']?>" class="primg">
    </div>
</div>
    </a>

<?php
}
        }
    }
    ?>
    


</div>
    </div>
</div>
</div>
<div class="container">
<div class="row row-cols-auto justify-content-md-center" style="display: flex; justify-content: center">
<a type="button" class="btn btn-sm btn-primary mt-0 mb-4 waves-effect waves-light" href="http://mine-dev.store/services.php" style="display: flex; justify-content: center; width: 200px; height: 60px; font-weight: 600; font-size: 20px; text-align: center; line-height: 50px; border-radius: 15px; background-color: orange; border: none">Посмотреть все</a>
  </div>
  </div>






    <footer class="footer">
        <div class="container">
            <div class="row-footer">
                <div class="footer-col">  
                    <h4>Услуги</h4>
                    <ul>
                        <li><a href="#">Игровые сборки</a></li>
                        <li><a href="#">Игровые проекты</a></li>
                        <li><a href="#">Игровой хостинг</a></li>
                    </ul>
                </div>
                <div class="footer-col">  
                    <h4>О студии</h4>
                    <ul>
                        <li><a href="#">Пользовательское соглашение</a></li>
                        <li><a href="#">Политика конфинденциальности</a></li>
                        <li><a href="#">Независимые отзывы</a></li>
                    </ul>
                </div>
                <div class="footer-col">  
                    <h4>Брифы</h4>
                    <ul>
                        <li><a href="#">Бриф на разработку проекта</a></li>
                        <li><a href="#">Бриф на разработку плагина</a></li>
                        <li><a href="#">Бриф на разработку сайта</a></li>
                    </ul>
                </div>
                <div class="footer-col">  
                    <h4>Контакты</h4>
                    <div class="social-links">
                        

                    </div>
                </div>
            </div>

    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/path/to/jquery.mCustomScrollbar.concat.min.js"></script>

    



<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd.popper.min.js"></script>
<script src="bs5/js/bootstrap.js"></script>
<script src="bs5/js/index.js"></script>
</body>

</html>