<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Форма Входа и Регистрации</title>
  </head>
  <body>

  <?php 
  if($_COOKIE['user'] == ''):
    ?>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="auth.php" method="post" class="sign-in-form">
            <h2 class="title">Войти</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" id="login" name="login" placeholder="Логин" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" id="pass" name="pass" placeholder="Пароль" />
            </div>
            <input type="submit" value="Войти" class="btn solid" />
            <p class="social-text">Или войдите при помощи социальных сетей</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fa fa-vk"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
            </div>
          </form>
          <form action="check.php" method="post" class="sign-up-form">
            <h2 class="title">Зарегистрироваться</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" id="login" name="login" placeholder="Логин" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="text" id="name" name="name" placeholder="Имя" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" id="email" name="email" placeholder="Почта" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="url" id="vk" name="vk" placeholder="Ссылка ВКонтакте" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" id="pass" name="pass" placeholder="Пароль" />
            </div>
            <input type="submit" class="btn" value="Зарегистрироваться" style="  width: 200px;"/>
            <p class="social-text">Или зарегистрируйтесь при помощи социальных сетей</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fa fa-vk"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Впервые тут ?</h3>
            <p>
              Скорее регистрируйтесь! Наш личный кабинет очень функционален
              и все ваши покупки и учлуги будут храниться там"
            </p>
            <button class="btn transparent" id="sign-up-btn" style="  width: 200px;">
              Зарегистрироваться
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Уже зарегистрированы ?</h3>
            <p>
              Войдите, чтобы получить доступ к своим покупкам и услугам,
              а так же к акционным предложениям нашей студии!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Войти
            </button>
          </div>
          <img src="img/register.svg" class="image" alt=""/>
        </div>
      </div>
    </div>

    <script src="app.js"></script>
    <?php else: ?>
      <script type="text/javascript">
      document.location.href="/cabinet";
      </script>
      <?php endif; ?>
  </body>
</html>
