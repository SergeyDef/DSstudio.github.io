<a id="up"></a>
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
    <p class="contactUs">Позвонить на WhatsApp</p>
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
          <div class="point location"><a href="../index.php">Главная</a></div>
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