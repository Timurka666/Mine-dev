<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный Кабинет</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
</head>
<body>
<?php 
  if($_COOKIE['user'] == ''){
    ?>
    
      <script type="text/javascript">
      document.location.href="/auth";
      </script>
      <?php }else{ ?>
<?php
   if($_COOKIE['type'] == 'sadmin'){

?>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"></span><span>Mine Dev<span style="font-size: 15px; margin-left: 10px;">Кабинет</span></span></h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="" class="active"><span class="las la-igloo"></span>
                        <span>Статистика</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-user-plus"></span>
                        <span>Создать заказ</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-tag"></span>
                        <span>Управление товарами</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-users"></span>
                        <span>Клиенты</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-store-alt"></span>
                        <span>Товары</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-chart-bar"></span>
                        <span>Аналитика</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-briefcase"></span>
                        <span>Заказы</span></a>
                </li>
                <li>
                    <a href="/cabinet/profile.php"><span class="las la-user-circle"></span>
                        <span>Профиль</span></a>
                </li>
                <li>
                    <a href="/auth/exit.php"><span class="las la-sign-out-alt"></span>
                        <span>Выйти</span></a>
                </li>
            </ul>
        </div>
    </div>
<?php }elseif($_COOKIE['type'] == 'seller'){ ?>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"></span><span>Mine Dev<span style="font-size: 15px; margin-left: 10px;">Кабинет</span></span></h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="" class="active"><span class="las la-igloo"></span>
                        <span>Статистика</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-user-plus"></span>
                        <span>Создать заказ</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-users"></span>
                        <span>Клиенты</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-store-alt"></span>
                        <span>Товары</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-chart-bar"></span>
                        <span>Аналитика</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-hands-helping"></span>
                        <span>Помощь</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-briefcase"></span>
                        <span>Заказы</span></a>
                </li>
                <li>
                    <a href="/cabinet/profile.php"><span class="las la-user-circle"></span>
                        <span>Профиль</span></a>
                </li>
                <li>
                    <a href="/auth/exit.php"><span class="las la-sign-out-alt"></span>
                        <span>Выйти</span></a>
                </li>
            </ul>
        </div>
    </div>
    <?php }elseif($_COOKIE['type'] == 'staff'){ ?>
        <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"></span><span>Mine Dev<span style="font-size: 15px; margin-left: 10px;">Кабинет</span></span></h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="" class="active"><span class="las la-igloo"></span>
                        <span>Статистика</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-user-plus"></span>
                        <span>Создать заказ</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-users"></span>
                        <span>Клиенты</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-store-alt"></span>
                        <span>Товары</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-hands-helping"></span>
                        <span>Помощь</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-briefcase"></span>
                        <span>Заказы</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-user-circle"></span>
                        <span>Профиль</span></a>
                </li>
                <li>
                    <a href="/auth/exit.php"><span class="las la-sign-out-alt"></span>
                        <span>Выйти</span></a>
                </li>
            </ul>
        </div>
    </div>
    <?php }else{ ?>
        <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"></span><span>Mine Dev<span style="font-size: 15px; margin-left: 10px;">Кабинет</span></span></h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="" class="active"><span class="las la-igloo"></span>
                        <span>Главная</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-cart-plus"></span>
                        <span>Сделать заказ</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-shopping-bag"></span>
                        <span>Мои покупки</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-store-alt"></span>
                        <span>Товары</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-hands-helping"></span>
                        <span>Помощь</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-user-circle"></span>
                        <span>Профиль</span></a>
                </li>
                <li>
                    <a href="/auth/exit.php"><span class="las la-sign-out-alt"></span>
                        <span>Выйти</span></a>
                </li>
            </ul>
        </div>
    </div>
    <?php } ?>
    <div class="main-content">
        <header>
              <h1>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
              </label>
              Главная
              </h1>
              <div class="search-wrapper">
                  <span class="las la-search"></span>
                  <input type="search" placeholder="Поиск"/>
              </div>

              <div class="user-wrapper">
                  <img src="img/2.jpg" width="40px" height="40px" alt="">
                  <div>
                      <h4>Владимир Первушин</h4>
                      <small>Супер-Админ</small>
                  </div>
              </div>
        </header>
        <main>
        <div class="cards">
            <div class="card-single">
                <div>
                    <h1>54</h1>
                    <span>Покупателей</span>
                </div>
                <div>
                    <span class="las la-users"></span>
                </div>

            </div>
            <div class="card-single">
                <div>
                    <h1>79</h1>
                    <span>Проектов</span>
                </div>
                <div>
                    <span class="las la-clipboard-list"></span>
                </div>

            </div>
            <div class="card-single">
                <div>
                    <h1>124</h1>
                    <span>Заказов</span>
                </div>
                <div>
                    <span class="las la-shopping-bag"></span>
                </div>

            </div>
            <div class="card-single">
                <div>
                    <h1>$6k</h1>
                    <span>Заработано</span>
                </div>
                <div>
                    <span class="lab la-google-wallet"></span>
                </div>

            </div>

        </div>

        <div class="recent-grid">
            <div class="projects">
                <div class="card">
                    <div class="card-header">
                        <h3>Активные Заказы</h3>

                        <button>Посмотреть все <span class="las la-arrow-right">

                        </span></button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table width="100%">
                                <thead>
                                    <tr>
                                        <td>Название заказа</td>
                                        <td>Зона</td>
                                        <td>Статус</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Дизайн</td>
                                        <td>Команда Дизайна</td>
                                        <td>
                                            <span class="status green"></span>
                                            Сдано
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Сборка</td>
                                        <td>Команда Разработки</td>
                                        <td>
                                            <span class="status purple"></span>
                                            В разработке
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>WEB-Сайт</td>
                                        <td>Команда WEB-Разработки</td>
                                        <td>
                                            <span class="status pink"></span>
                                            Заказ принимается
                                        </td>
                                    </tr><tr>
                                        <td>Дизайн</td>
                                        <td>Команда Дизайна</td>
                                        <td>
                                            <span class="status green"></span>
                                            Сдано
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Сборка</td>
                                        <td>Команда Разработки</td>
                                        <td>
                                            <span class="status purple"></span>
                                            В разработке
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>WEB-Сайт</td>
                                        <td>Команда WEB-Разработки</td>
                                        <td>
                                            <span class="status pink"></span>
                                            Заказ принимается
                                        </td>
                                    </tr><tr>
                                        <td>Дизайн</td>
                                        <td>Команда Дизайна</td>
                                        <td>
                                            <span class="status green"></span>
                                            Сдано
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Сборка</td>
                                        <td>Команда Разработки</td>
                                        <td>
                                            <span class="status purple"></span>
                                            В разработке
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>WEB-Сайт</td>
                                        <td>Команда WEB-Разработки</td>
                                        <td>
                                            <span class="status pink"></span>
                                            Заказ принимается
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        </div>
                </div>
            </div>
            <div class="customers">
                <div class="card">
                    <div class="card-header">
                        <h3>Новые Заказчики</h3>

                        <button>Посмотреть все <span class="las la-arrow-right">

                        </span></button>
                    </div>
                    <div class="card-body">
                        <div class="customer">
                            <div class="info">
                                <img src="img/2.jpg" width="40px" height="40px" alt="">
                                <div>
                                    <h4>Кривошеев Даниил</h4>
                                    <small>Комментарий</small>
                                </div>
                            </div>
                            <div class="contact">
                                <span class="las la-user-circle"></span>
                                <span class="las la-comment-alt"></span>
                                <span class="las la-id-card"></span>
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <img src="img/2.jpg" width="40px" height="40px" alt="">
                                <div>
                                    <h4>Кривошеев Даниил</h4>
                                    <small>Комментарий</small>
                                </div>
                            </div>
                            <div class="contact">
                                <span class="las la-user-circle"></span>
                                <span class="las la-comment-alt"></span>
                                <span class="las la-id-card"></span>
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <img src="img/2.jpg" width="40px" height="40px" alt="">
                                <div>
                                    <h4>Кривошеев Даниил</h4>
                                    <small>Комментарий</small>
                                </div>
                            </div>
                            <div class="contact">
                                <span class="las la-user-circle"></span>
                                <span class="las la-comment-alt"></span>
                                <span class="las la-id-card"></span>
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <img src="img/2.jpg" width="40px" height="40px" alt="">
                                <div>
                                    <h4>Кривошеев Даниил</h4>
                                    <small>Комментарий</small>
                                </div>
                            </div>
                            <div class="contact">
                                <span class="las la-user-circle"></span>
                                <span class="las la-comment-alt"></span>
                                <span class="las la-id-card"></span>
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <img src="img/2.jpg" width="40px" height="40px" alt="">
                                <div>
                                    <h4>Кривошеев Даниил</h4>
                                    <small>Комментарий</small>
                                </div>
                            </div>
                            <div class="contact">
                                <span class="las la-user-circle"></span>
                                <span class="las la-comment-alt"></span>
                                <span class="las la-id-card"></span>
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <img src="img/2.jpg" width="40px" height="40px" alt="">
                                <div>
                                    <h4>Кривошеев Даниил</h4>
                                    <small>Комментарий</small>
                                </div>
                            </div>
                            <div class="contact">
                                <span class="las la-user-circle"></span>
                                <span class="las la-comment-alt"></span>
                                <span class="las la-id-card"></span>
                            </div>
                        </div>

                        
                        

                    </div>
                </div>
            </div>
        </div>
    </main>
</div>


      <?php } ?>
</body>
</html>