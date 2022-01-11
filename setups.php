<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="index.js"></script>
    <link rel="stylesheet" href="/path/to/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="/bs5/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
   }

    </style>


        <div class="w-100 h-5 p-3" style="background-image: url(img/stone.png); height: 134px">
      <div class="container">
    <div class="row row-cols-auto justify-content-md-center" style="display: flex; justify-content: center">
    <div class="col">
      1 of 3
    </div>
    <div class="col-6" style="display: flex; justify-content: center; margin-top: -1.5em;">
    <div><a href="#"> <img src="/img/logotype.png" class="logotype" style="display: flex; justify-content: center; max-with: 50%; max-height: 50%; transition: ease-in-out; transition-duration: 0.2s;"> </a> </div>

  
  </div>
    <div class="col">
      3 of 3
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

<div class="topnav" id="myTopnav">
<div class="container justify-content-md-center">
  <a href="#home" >Главная</a>
  <a href="#news" class="active">Сборки</a>
  <a href="#contact">Дизайн</a>
  <a href="#about">Услуги</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
    </div>
</div>


<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>


-->


<!--
<div class="menuc">
    <nav class="nav1">
        <ul class="nav__list">
          <li class="nav__listlogo">
            <a class="logo">MINE DEV</a>
          </li>
          <li class="nav__listitem">Товары
            <ul class="nav__listitemdrop">
              <li>Игровые сборки</li>
              <li>Самописные плагины</li>
              <li>Донат-сайты</li>
            </ul>
          </li>
          <li class="nav__listitem">Услуги
            <ul class="nav__listitemdrop">
              <li>Игровые проекты</li>
              <li>Дизайн</li>
              <li>Постройка карт</li>
              <li>Рекламные ролики</li>
              <li>Различные услуги</li>
            </ul>
          </li>
          <li class="nav__listitem">Отзывы</li>
          <li class="nav__listitem">Контакты</li>
        </ul>
      </nav1>
      </div>
    -->


<div class="hat-row">
<div class="container justify-content-md-center">
    <div class="hat-h1" font-size="200px">Создание игровых <br>проектов Minecraft</div>
    <p class="hat-h2">​Уникальные сборки, плагины , авто-донаты,<br> разработка сайтов и лаунчеров, все это — у нас.</p>
    <a href="#" class="myButton1">Подробнее об услугах</a>
    <a href="#" class="myButton">Товары</a>
</div>

</div>


<style>
h1 
{
    padding: 125px 0 0 0;
    text-align: center;
    color: rgb(49, 49, 49);
    font-family: 'Roboto', sans-serif;
    font-weight: 800;
    font-size: 50px;
    text-size-adjust: 100 px;
    text-transform: capitalize;
    font-style: inherit;
}
h2
{
    margin: 0 auto;
    padding: 0 0 0 0;
    text-align: center;
    color: rgb(49, 49, 49);
    font-family: 'Roboto', sans-serif;
    font-weight: 500;
    font-size: 25px;
    text-size-adjust: 100 px;
    font-style: inherit;
    margin-bottom: 90px;
}
</style>
<h1>ИГРОВЫЕ СБОРКИ</h1>
<h2>Самые актуальные игровые сборки разных тематик</h2>



<div class="container">
<div class="row row-cols-auto justify-content-md-center" style="display: flex; justify-content: center">





    <?php
    include "database.php";

    $result = mysqli_query($induction,"SELECT * FROM `donate`");


            
    $count = 0;

    while($tovar = mysqli_fetch_assoc($result)) { 
        if ($tovar['type'] == "sborka"){

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
    ?>
    





    </div>
</div>
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

    <script>
        (function($){
            $(window).on("load",function(){
                $(".content").mCustomScrollbar();
            });
        })(jQuery);
    </script>



   


<?php
    include "database.php";

    $result = mysqli_query($induction,"SELECT * FROM `donate`");


            
    $count = 0;

    while($tovar = mysqli_fetch_assoc($result)) { 
        if ($tovar['type'] == "sborka"){

        $count = $count + 1;
        ?>
        <style>
.modal-container.show .modal<?php echo $count?> {
transform: translateY(0);
}
.modal<?php echo $count?> {
	background-color: #fff;
	border-radius: 30px;
	box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
	padding: 25px 50px;
	text-align: center;
	width: 650px;
	max-width: 100%;
 	transform: translateY(-200%); 
 	transition: transform 0.3s ease;
}

.modal<?php echo $count?> a .close-button{
    margin-left: 540px;
    font-size: 30px;
    font-weight: 800;

}
.modal<?php echo $count?> h2 {
    margin-top: -45px;
    margin-bottom: 30px;
    font-size: 4vh;
    font-weight: 900;
    font-stretch: ultra-condensed;
    font-family: 'Poppins', sans-serif;
}

.modal<?php echo $count?> p {
	font-size: 14px;
	opacity: 0.7;
    margin-bottom: 20px;
}

        </style>
    <div class="modal-container" id="modal_container<?php echo $count?>">
        <div class="modal<?php echo $count?>">
            <a id="close<?php echo $count?>">
                <span class="close-button" width="20px" height="20px"><ion-icon name="close-outline"></ion-icon></span>
            </a>
            <h2><?php echo $tovar['name']?></h2>
            <?php echo $tovar['description']?>
                <iframe class="youtube" width="560" height="315" src="<?php echo $tovar['label']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <button href="<?php echo $tovar['link']?>">
                    Купить
                </button>
        </div>
    </div>
    

    <script>
        const open<?php echo $count?> = document.getElementById('open<?php echo $count?>');
    const close<?php echo $count?> = document.getElementById('close<?php echo $count?>');
    const modal<?php echo $count?> = document.getElementById('modal_container<?php echo $count?>');

    open<?php echo $count?>.addEventListener('click', () => {
	modal<?php echo $count?>.classList.add('show');
    });

    close<?php echo $count?>.addEventListener('click', () => {
	modal<?php echo $count?>.classList.remove('show');
    });
    </script>
<?php
        }
    }
    ?>




<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd.popper.min.js"></script>
<script src="bs5/js/bootstrap.js"></script>
<script src="bs5/js/index.js"></script>
</body>

</html>