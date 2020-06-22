<!doctype html>
<html>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="Content-Type" content="text/html" />
   <title>Ваше сообщение успешно отправлено</title>
</head>
 
<body>
 
<?php
   $back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";
 
   if(!empty($_POST['name']) and !empty($_POST['phone'])){
     
      $name = trim(strip_tags($_POST['name']));
      $phone = trim(strip_tags($_POST['phone']));
 
      mail('luchkinshad@yandex.ru', 'Заказ дома и бани', 
      'Вам написал: '.$name.'<br />Номер телефона заказчика: '.$phone,"Content-type:text/html;charset=utf-8");
 
 
      echo "Сообщение успешно отправлено!<br> Вы получите ответ в 
      ближайшее время.<br> $back";
 
      exit;
   } 
   else {
      echo "Для отправки сообщения заполните все поля! $back";
      exit;
   }
?>
</body>
</html>