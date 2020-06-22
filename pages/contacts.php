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
<div class="main_title">
  <h1>С этой странице Вы можите связаться с нами</h1>
</div>
<div class="whyWeh">
    <div class="conta">
      <h5>Наши контакты</h5>
      <span class="contact"><span class="our_contact">Наши телефоны:</span> 8(495) 160-57-29; 8(915) 390-99-15.</span>
      
      <span class="contact"><span class="our_contact">E-mail:</span> pas.sergei2014@yandex.ru</span>
      <div id="network">
        <a href=""><img src="../img/wk2.png"></a>
        <a href=""><img src="../img/instagram2.png"></a>
        <a href=""><img src="../img/facebook2.png"></a>
        <a href=""><img src="../img/twitter2.png"></a>
      </div>
    </div>
    <div class="conta_form">
      <h5>Форма обратной связи</h5>
      <form action="../server/send.php" method="post" name="contact" onsubmit='valid(tihs)' class="enter">
        <ul class="form">
          <li>
            <label for="name" class="label_form">Имя:</label>
            <input type="text" name="name" class="elem_form elem_field" id="name">
          </li>
          <li>
            <label for="mail" class="label_form">E-mail:</label>
            <input type="text" name="mail" class="elem_form elem_field" id="mail">
          </li>
          <li>
            <label for="phone" class="label_form">Номер:</label>
            <input type="text" name="phone" class="elem_form elem_field" id="phone">
          </li>
          <li>
            <label for="message_me" class="label_form">Ваше сообщение:</label>
            <textarea name="message_me" wrap="hard" cols="40" id="message_me" class="message_me"></textarea>
          </li>
          <li class="butt_feedback">
            <input type="submit" name="" class="btn btn-lg elem_form elem_button" value="Отправить заявку" onclick="valid(form)">
          </li>
        </ul>
        <label for="agreement"><input type="checkbox" checked name="agreement" id="che"> согласие на обработку персональных данных</label>
      </form>
    </div>
  </div>
<?php
require_once '../tpl/footer.php';
?>
  </body>
</html>