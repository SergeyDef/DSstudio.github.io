<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="author" content="SergiuszDef">
    <meta http-equiv="content-language" content="ru">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <!-- Bootstrap CSS -->

    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet"> 

    <link href="https://fonts.googleapis.com/css?family=Exo+2|Open+Sans" rel="stylesheet"> 

    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <link rel='stylesheet' href='../style/style.css'>
    <link rel='stylesheet' media='only screen and (max-width: 600px)' href="../style/600.css">
    <link rel='stylesheet' media='only screen and (max-width: 1000px) and (min-width: 600px)' href="../style/1000.css">

    <!-- FONT -->
    <title>Разработка и продажа сайтов</title>
  </head>
  <body>
    <?php
require_once '../tpl/head.php';
?>
<content class="whyWe">
  <div class="main_title">
    <h1>Здесь посетители/клиенты могут оставить отзывы о работе компании D/S</h1>
  </div>
    <div class="comment">
      <div class="caution">
        <span>Для отправки отзыва необходимо войти в свой аккаунт или зарегистрироваться</span>
      </div>
      <div class="alignment">
        <div class="enter">
          <div class="caution">
            <h6>Войти в личный кабинет</h6>
          </div>
          <form action="" method="post" name="enter_site">
            <ul class="form">
              <li>
                <label for="user_login" class="label_form">логин</label>  
                <input type="text" class="elem_field" id="user_login" name="user_login">
              </li>
              <li>
                <label for="user_password" class="label_form">пароль</label>
                <input type="text" class="elem_field" id="user_password" name="user_password">
              </li>
              <li class="but_list">
                <button class="btn btn-lg elem_form elem_button">Войти</button>
              </li>
            </ul>
          </form>
        </div>
        <div class="enter registration">
          <h6>Зарегистрироваться</h6>
          <form action="recording" method="post" name ="register" class="form">
            <label for="new_user" class="label_form">логин</label>
            <input type="text" class="elem_field" id="new_user" name="new_user">
            </br>
            <label for="new_email" class="label_form">email</label>
            <input type="text" class="elem_field" id="new_email" name="new_email">
            </br>
            <label for="new_email" class="label_form">номер телефона</label>
            <input type="text" class="elem_field" id="new_email" name="new_email">
            </br>
            <label for="new_password" class="label_form">пароль</label>
            <input type="text" class="elem_field" id="new_password" name="new_password">
            </br>
            <label for="repeat_password" class="label_form">повторите пароль</label>
            <input type="text" class="elem_field" id="repeat_password" name="repeat_password">
            </br>
            <button class="btn btn-lg elem_form elem_button">Зарегистрироваться</button>
            </br>
            <label>
              <input type="checkbox" checked name="agreement" id="ceh"> согласие на обработку персональных данных
            </label>
          </form>
        </div>
        <div class="regist">
          <div class="open_registration" id="right_register">
            <span class="span">Подать прошение на регистрацию</span>
          </div>
        </div>
        
      </div>
        </div>
        <div class="review">
          <form action="">
          <input type="text" name="">
          <button>Оставить отзыв</button>
        </form>
        </div>
        <div class="recent_feedback">
          <div>
            <h2>Последние отзывы</h2>
          </div>
          <div class="feedback">
          <div class="user_photo">
            <img src="../img/user1.PNG" alt="user_photo">
            <span>Veronica</span>
          </div>
            <div class="user_text">
              <p>Очень понравилась работа компании D/S!</p>
              <p>Ребята настоящие профессионалы. Сайт сделали именно такой о котором я мечтала. Работу выполнили даже раньше обозначенных сроков.</p>
              <p>Огромное спасибо!</p>
            </div>
        </div>
        <div class="feedback">
          <div class="user_photo">
            <img src="../img/user2.png" alt="user_photo">
            <span>Karina</span>
          </div>
            <div class="user_text">
              <p>Очень понравилась работа компании D/S!</p>
              <p>Ребята настоящие профессионалы. Сайт сделали именно такой о котором я мечтала. Работу выполнили даже раньше обозначенных сроков.</p>
              <p>Огромное спасибо!</p>
            </div>
        </div>
        <div class="feedback">
          <div class="user_photo">
            <img src="../img/user3.PNG" alt="user_photo">
            <span>Ashley</span>
          </div>
            <div class="user_text">
              <p>Очень понравилась работа компании D/S!</p>
              <p>Ребята настоящие профессионалы. Сайт сделали именно такой о котором я мечтала. Работу выполнили даже раньше обозначенных сроков.</p>
              <p>Огромное спасибо!</p>
            </div>
        </div>
          <div class="show_more">
            <span>показать ещё</span>
          </div>
        </div>
      </content>
</div>
<?php
require_once '../tpl/footer.php';
?>
  </body>
</html>