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
    <h1>Наши работы</h1>
  </div>
  <!-- Слайдер -->
<div class="slide_modal">
  <div class="closing">
    <img src="../img/closing.png" alt="closing">
  </div>
    <div class="slide_show">
        <div class="slide_container">
          <ul class="slide_img">
            <li class="slide_img_0">
              <img src="../img/catalogue/houm/layout_number.png">
            </li>
            <li class="slide_img_1">
              <img src="../img/catalogue/houm/sample01.png">
            </li>
            <li class="slide_img_2">
              <img src="../img/catalogue/houm/sample02.png">
            </li>
            <li class="slide_img_3">
              <img src="../img/catalogue/houm/sample03.png">
            </li>
            <li class="slide_img_4">
              <img src="../img/catalogue/houm/sample04.png">
            </li>
          </ul>
        </div>
    <div class="slide_navigation">
      <div class="arrow right_arrow">
        <img src="../img/right_arrow.png" alt="right arrow">
      </div>
      <div class="switches" id="switches">
        
      </div>
      <div class="arrow left_arrow">
        <img src="../img/left_arrow.png" alt="left arrow">
      </div>
    </div>
  </div>
</div>
<div class="gros_gallery">
  <div class="neym_gallery">
    <h5>Многостраничный сайт для продажи готовых строений из бруса</h5>
  </div>
  <div class="central_unit">
      <div class="main_picture">
        <img src="../img/catalogue/houm/1.png">
      </div>
      <div class="rest_pages">
        <div class="secondary_images">
          <img src="../img/catalogue/houm/sample01.png" alt=""> 
        </div>
        <div class="secondary_images">
          <img src="../img/catalogue/houm/sample02.png" alt=""> 
        </div>
      </div>
    </div>
    <div class="neym_gallery">
      <a href="../myWork/houses_baths/index.html">Посмотреть рабочий проект</a>
    </div>
</div>
  <div id="vault_gallery" class="vault_gallery">

    <div class="galleria">
      <a href="../myWork/quiz/index.html">
        <div class="project_title">
          <h4>Заказ квиз-лендинга</h4>
        </div>
        <div class="icon_project">
          <img src="../img/catalogue/quiz/0_1.png">
        </div>
      </a>
    </div>
    <div class="galleria">
      <a href="../myWork/tatuNataley/index.html">
        <div class="project_title">
          <h4>Сайт тату-мастера </h4>
        </div>
        <div class="icon_project">
         <img src="../img/catalogue/TattooAlexandra/0_1.png">
        </div>
      </a>
    </div>
    <div class="galleria">
      <a href="../myWork/BREDLI/index.html">
        <div class="project_title">
          <h4>Сайтдля продажи готовых строений из бруса</h4>
        </div>
        <div class="icon_project">
          <img src="../img/catalogue/bredli/0_1.png">
        </div>
      </a>
    </div>
     <div class="galleria">
      <a href="../myWork/houses_baths/index.html">
        <div class="project_title">
          <h4>Сайт для продажи готовых строений из бруса</h4>
        </div>
        <div class="icon_project">
          <img src="../img/catalogue/houm/layout_number.png">
        </div>
      </a>
    </div>
  </div>
  
</content>

<?php
require_once '../tpl/footer.php';
?>
  </body>
</html>

