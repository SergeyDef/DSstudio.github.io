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

    <link rel="stylesheet" type="text/css" href="style/animate.min.css">

    <link rel='stylesheet' href='style/style.css'>
    <link rel='stylesheet' media='only screen and (max-width: 600px)' href="style/600.css">
    <link rel='stylesheet' media='only screen and (max-width: 950px) and (min-width: 600px)' href="style/1000.css">


    <!-- FONT -->
    <title>Разработка и продажа сайтов</title>
  </head>
  <body>
    <div class="col">
  <div id="hidden_menu">
    <div id="menu_sandwich">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <img src="../img/open.png" id="hidden_menu_close">
  </div>
  <div class="hed_logo">
    <a href="../index.php" class="logo_a">
      <img src="../img/logo.png" class="logo_img">
    </a>
  </div>
  <div class="hed_elem writeMe">
    <div class="hed_contact">
        <img src="../img/callYeh.PNG" class="dial">
        <p class="our_phone">8(915) 390-99-15</p>
    </div>
    <p class="contactUs">Позвонить нам</p>
    <p class="contactUs">Позвонить на WhatsAppp</p>
  </div>
  <div class="hed_elem">
    <div class="hed_contact">
      <img src="../img/callMi.PNG" onclick="callback(event)">
      <p class="our_phone">8(495) 160-57-29</p>
    </div>
      <p class="contactUs" id="coll" onclick="callback(event)">Заказать обратный звонок</p>
  </div>
</div>
<nav class="modal_form" id="mod_form">
  <img src="../img/open.png" class="open_form" onclick="openForm()">
  <form>
    <div class="elem_text">
       <p class="elem_p">Заказать обратный звонок</p>
    </div>
    <ul class="form">
      <li>
        <label for="alias">Как к Вам обращаться:</label>
        <input type="text" name="alias" class="elem_form elem_field">
      </li>
      <li>
        <label for="phone_number">Ваш номер:</label>
        <input type="text" name="phone_number" class="elem_form elem_field">
      </li>
      <li>
        <button type="button" class="btn btn-lg elem_form elem_button">Отправить</button>
      </li>
      <li>
        <label for="che"><input type="checkbox" checked name="agreement" id="che"> согласие на обработку персональных данных</label>
      </li>
      <li>
        <a href="">Политика конфиденциальности</a>
      </li>
    </ul>
  </form>
</nav>
    <header id="hed">
      <div class="container">
      <div class="row hed_min">
        <nav id="menu_point" class="col-md-12">
          <div class="point location"><a href="index.php">Главная</a></div>
          <div class="point"><a href="../pages/amenities.php">Услуги</a></div>
          <div class="point"><a href="../pages/portfolio.php">Портфолио</a></div>
          <div class="point"><a href="../pages/blog.php">Блог</a></div>
          <div class="point"><a href="../pages/contacts.php">Контакты</a></div>
          <div class="net_work">
            <a href=""><img src="../img/wk.PNG"></a>
            <a href=""><img src="../img/instagram.PNG"></a>
            <a href=""><img src="../img/facebook.PNG"></a>
            <a href=""><img src="../img/twitter.PNG"></a>
          </div>
        </nav>
      </div>
    </div>
    </header>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active firstPicture">
      <img class="d-block w-100" src="img/slayd1.png" alt="First slide">
    </div>
    <div class="carousel-item firstPicture">
      <img class="d-block w-100" src="img/slayd2.PNG" alt="Second slide">
    </div>
    <div class="carousel-item firstPicture">
      <img class="d-block w-100" src="img/slayd3.PNG" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="block">
  <div class="container pictureComes">
    <div>
      <h3 class="text_min">
        <span>Какой сайт нужен</span>
        <br/>
        <span>Вам?</span>
      </h3>
    </div>
    <div class="type_site" id="type_site">
      <div class="block_0" id="block_0">
        <div class="whatYouNeed">
          <p>Вы являетесь частным предпренимателем и Вам нужен небольшой, но информативный сайт? Возможно Вам нужен “Сайт визитка”</p>
          <span class="but but_left cutaway">Поробнее</span>
        </div>
        <div class="whatYouNeed">
          <p>Вы являетесь небольшой компанией, которая предоставляет товары и услуги, и Вы хотете, иметь на Вашем сайте каталог стоварами и услугами? Вам подходит “Корпоративный бизнес сайт”</p>
          <span class="but but_left business">Поробнее</span>
        </div>
        <div class="whatYouNeed">
          <p>Возможно Ваша компания крупная и насчитывает больше сотни сотрудников, в таком случае будет очень полезен "Внутренний корпоративный сайт"</p>
          <span class="but but_left corporate">Поробнее</span>
        </div>
      </div>
      <div class="whyWe">
        <div id="whoWe_modal">
          <img class="imgMepFon" id="imgMepFon" src="img/imgCenter.png">
        </div>
        <div class="site cutaway" id="cutaway">
          <h6>Сайт-визитка</h6>
            <img src="img/site/cutaway.png" alt="" class="img_left">
          <div class="site_description">
            <p>Сайт-визитка – обычно состоит из одной или нескольких страниц и имеет уникальный, но простой и функциональный дизайн;</p>
            <p>Иеально подходит для компаний, которые хотят разместить информацию о себе и своих услугах в Интернете;</p>
            <p>основные разделы сайта: «О компании», «Продукция или услуги», «Прайс-листы», «Контактная информация»;</p>
            <p>Такой сайт используется предприятиями, организациями и частными лицами.</p>
            <span class="but backward backward_left">Вернуть все статьи</span>
          </div>
        </div>
        <div class="site business" id="business">
          <h6>Бизнес сайт</h6>
            <img src="img/site/business.png" alt="" class="img_left">
          <div class="site_description">
            <p>Корпоративный имиджевый web сайт – идеально подходит для обеспечения имиджевого присутствия в Сети;</p>
            <p>Cайт служит для предоставления подробной информации о компании, истории торговой марки, сведений об оказываемых услугах или поставляемых товарах;</p> 
            <p>Корпоративный сайт обычно содержит ленту новостей компании, средства публикации информации о рекламных и торговых акциях, информацию для прессы и другие сведения;</p>
            <p>Часто такие сайты сочетают информацию о компании с каталогом продукции;</p>
            <p>Используется эксклюзивный оригинальный дизайн, выгодно представляющий компанию; использование нестандартных идей и решений в оформлении, процентное соотношение текст/графика = 50/50</p>
            <span class="but backward backward_left">Вернуть все статьи</span>
          </div>
        </div>
        <div class="site corporate" id="corporate">
          <h6>Корпоративный сайт</h6>
            <img src="img/site/corporate.png" alt="" class="img_left">
          <div class="site_description">
            <p>Корпоративный информационный сайт – необходим для автоматизации внутреннего документооборота, учёта показателей компании, управления персоналом, может быть оснащён функциями обмена информацией между удалёнными филиалами; корпоративный сайт позитивно влияет на репутацию и имидж компании; дизайн должен соответствовать фирменному стилю компании; чаще всего, включает «администраторскую часть» для создания и изменения контента, позволяющую менеджеру или секретарю компании добавлять или менять новости, информационные статьи, справочную и прочую информацию на сайте; используется минимум графики, основной упор идет на текст.</p>
            <span class="but backward backward_left">Вернуть все статьи</span>
          </div>
        </div>
        <div class="site informational site_right" id="informational">
          <h6>Информационный контент-проект</h6>
            <img src="img/site/online_store.png" alt="" class="img_right">
          <div class="site_description">
            <p>Информационный контент-проект – это сайт, как правило некоммерческой неправленности, который представляет собой собрание текстов, статей и прочих материалов, основная задача которого – привлечение посетителей по определенной тематике. Часто, этот трафик обычно перенаправляется на коммерческие сайты и, по сути, контент-проект используется, как рекламная площадка.</p>
            <p>Может быть выполнен в виде интернет-библиотеки, энциклопедии или справочника. Каждая отдельная страничка сайта контент-проекта дает, как правило, незначительный трафик, однако общий трафик такого сайта может быть очень внушительным.</p>
            <p>Также может представлять собой образовательный или развлекательный ресурс.</p>
            <p> Может предстовлять из себя большой виртуальный массив информации, включающий в себя множество различных тематических разделов меньшего размера, либо некоторое количество самостоятельных проектов.</p>
            <span class="but backward backward_right">Вернуть все статьи</span>
          </div>
        </div>
        <div class="site shop site_right" id="shop">
          <h6>Интернет-магазин</h6>
            <img src="img/site/shop.png" alt="" class="img_right">
          <div class="site_description">
            <p>Интернет-магазин, он же Сетевой магазин, Электронный магазин, Internet shop, E-shop – интерактивный веб-сайт рекламирующий товар или услугу, принимающий заказы на покупку, предлагающий пользователю выбор варианта расчета, выписывающий счет на оплату, служащий одновременно подтверждением заказа;</p> 
            <p>при этом администратор магазина обязан: организовать доставку товара;</p>
            <p>проконтролировать расчеты с покупателем за поставку.</p>
            <span class="but backward backward_right">Вернуть все статьи</span>
          </div>
        </div>
        <div class="site blog site_right" id="blog">
          <h6>Блог</h6>
            <img src="img/site/blog.png" alt="" class="img_right">
          <div class="site_description">
            <p>Блог – это сайт, представляющий собой интернет-дневник, или журнал, который ведется наподобие новостной ленты, при этом на каждую тему блога посетители могут оставлять свои комментарии-сообщения, доступные с главной страницы соответствующей темы. Блог обычно очень часто обновляется, по этой причине он может намного чаще индексироваться поисковыми машинами, чем обычные сайты.</p>
            <p>Блог часто используется для общения людей объединенных какими-либо общими интересами, и в этом, чем-то, напоминает форум.</p>
            <p>Самые последние события в мире зачастую раньше появляются на различных блогах, и только немного позже в сообщениях новостных интернет-изданий.</p>
            <p>В общем можно говорить о том, что блог представляет собой странный гибрид ленты новостей, гостевой книги и форума одновременно.</p>
            <span class="but backward backward_right">Вернуть все статьи</span>
          </div>
       </div>
      </div>
      <div class="" id="block_1">
        <div class="whatYouNeed">
          <p>Занимаитесь обучением, нужен информационный блог  для обучающихся или просто необходимо привлеч нужную аудиторию - стоит расмотреть "Информационный сайт" или "Контент-проект"</p>
          <span class="but but_right informational">Поробнее</span>
        </div>
        <div class="whatYouNeed">
          <p>Вам нужен полноценный онлайн магазин на котором будут распологаться множество товаров?</p>
          <span class="but but_right shop">Поробнее</span>
        </div>
        <div class="whatYouNeed">
          <p>Вы талантливы и Вам есть о чём сказать!? Возможно Вам нужен персональный блог.</p>
          <span class="but but_right blog">Поробнее</span>
        </div>
      </div>
    </div>
  </div>
</div>
  <div class="boasting">
    <div class="container">
    <div class="row">
      <div class="col-md-4 boast wow fadeInRight" data-wow-duration='1s'>
        <p>Работаем</p>
        <p><span>БЕЗ</span> переплаты</p>
      </div>
      <div class="col-md-4 boast wow fadeInRight" data-wow-duration='1s' data-wow-delay="1s">
        <p>Более <span>года</span></p>
        <p>успешной работы</p>
      </div>
      <div class="col-md-4 boast wow fadeInRight" data-wow-duration='1s' data-wow-delay="2s">
        <p>Более <span>2</span></p>
        <p>крупных проектов</p>
      </div>
    </div>
  </div>
  </div>
</div>
<div class="block">
  <div class="whyWe">
    <h3 class="headerFormat3">Почему именно мы?</h3>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6 our_advantage">
        <h3>НАШИ ПРИЕМУЩЕСТВА</h3>
      </div>
      <div class="col-md-6 whoWe our_advantage">
        <p>Студия WEB-разработки D\S - это команда профессионалов которая ответственно и креативно подойдет к реализации задач поставленных перед нами! Многие годы работы, множество восторженных клиентов, а так же большое портфолио говорят сами за себя!</p>
      </div>
    </div>
  </div>
</div>
<div class="block">
  <h3>Технологии с которыми мы работаем</h3>
  <div class="off">
    <div class="offers wow flip" data-wow-offset="200" data-wow-delay="0s">
      <img src="img/icon1.png" title="узнать подробнее">
    </div>
    <div class="offers wow flip" data-wow-offset="200" data-wow-delay="0s">
          <img src="img/icon2.png" title="узнать подробнее">
    </div>
    <div class="offers wow flip" data-wow-offset="200" data-wow-delay="0s">
      <img src="img/icon3.png" title="узнать подробнее">
    </div>
    <div class="offers wow flip" data-wow-offset="200" data-wow-delay="0s">
      <img src="img/icon4.png" title="узнать подробнее">
    </div>
    <div class="offers wow flip" data-wow-offset="200" data-wow-delay="0s">
      <img src="img/icon5.png" title="узнать подробнее">
    </div>
  </div>
</div>
<div class="block">
  <content class="whyWe">
    <h3 class="headerFormat3">Процесс выполнения заказа</h3>
    <div class="container">
      <div class="stag">
        <div class="stages">
          <h2>Разработка технического задания</h2>
          <p>Первым этапом создания сайта будет разработка индивидуального адаптивного макета и представление его на утверждение.​</p>
        </div>
        <div class="job_number">
          <div class="job_number_1"></div>
        </div>
        <div class="stages">
          <img src="img/task.png" alt="" class="stages_img">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="stag">
        <div class="stages">
          <img src="img/layout.png" alt="" class="stages_img">
        </div>
        <div class="job_number">
          <div class="job_number_2"></div>
        </div>
        <div class="stages">
          <h2>Разработка макета</h2>
          <p>Первым этапом создания сайта будет разработка индивидуального адаптивного макета и представление его на утверждение.​</p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="stag">
        <div class="stages">
          <h2>Написание кода</h2>
          <p>Процесс создания готового сайта может занять от несколько дней до месяца, в зависимости от сложности проекта.​</p>
        </div>
        <div class="job_number">
          <div class="job_number_3"></div>
        </div>
        <div class="stages">
          <img src="img/coda.png" alt="" class="stages_img">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="stag">
        <div class="stages">
          <img src="img/testing.png" alt="" class="stages_img">
        </div>
        <div class="job_number">
          <div class="job_number_4"></div>
        </div>
        <div class="stages">
          <h2>Тестирование сайта</h2>
          <p>Проверка ресурса на адаптивность, кросбраузирность, риливантность поисковых систем, тестирование готового кода.</p>
        </div>
      </div>
    </div>
  </content>
</div>
<nav class="consultchen">
    <form action="">
      <label for="">Как к Вам обратиться</iebel>
      <input type="text" name="" id="">
      <label for="">Номер телефона</iebel>
      <input type="text" name="" id="">
      <button></button>
      <label for="">
        <input type="checkbox" checked name=""> согласие на обработку персональных данных
      </label>
      <p>Оставти ваш номер телефона и нашь специолист неприменно с Вами свяжется</p>
    </form>
  </nav>
<footer class="foot">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>Делаем сайт адаптивным со скидкой до 20%</h2>
  <p>Когда сайт адаптирован под мобильные устройства, это напрямую сказывается на количестве заказов. Если клиентам удобно пользоваться, они будут с вами.</p>
  <p>Мы делаем быстрые, адаптивные сайты, которые отлично выглядят на всех устройствах и дружат с поисковыми системами.​</p>
  <div class="consult" onclick="callback(event)">
    <span>Бесплатная консультация</span>
  </div>
    </div>
  </div>
  </div>
  <div class="fashionable_people">
        <img src="img/people/silhouette1.png">
      </div>
      <div class="fashionable_people">
        <img src="img/people/silhouette2.png">
      </div>
      <div class="fashionable_people">
        <img src="img/people/silhouette3.png">
      </div>
      <div class="fashionable_people">
        <img src="img/people/silhouette4.png">
      </div>
      <div class="fashionable_people">
        <img src="img/people/silhouette5.png">
      </div>
      <div class="fashionable_people">
        <img src="img/people/silhouette6.png">
      </div>
      <div class="fashionable_people">
        <img src="img/people/silhouette7.png">
      </div>
    <div class="fashionable_people">
        <img src="img/people/silhouette8.png">
      </div>
       <div class="fashionable_people">
        <img src="img/people/silhouette9.png">
      </div>
       <div class="fashionable_people">
        <img src="img/people/silhouette10.png">
      </div>
   <a href="pages/privacy_policy.php" class="map_policy">Политика конфиденциальности</a>
   <a href="pages/site_map.php" class="map_policy">Карта сайта</a>
</footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>


<script type="text/javascript" async src="js/js.js"></script>
<script type="text/javascript" async src="js/typeSite_js.js"></script>
<script type="text/javascript" async src="js/view_articles.js"></script>


<script src="js/wow.min.js"></script>
<script>
new WOW().init();
</script>

<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

  </body>
</html>