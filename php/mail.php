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
 
   if(!empty($_POST['name']) and !empty($_POST['phone']) and !empty($_POST['mail']) 
   and !empty($_POST['message'])){
      $name = trim(strip_tags($_POST['name']));
      $phone = trim(strip_tags($_POST['phone']));
      $mail = trim(strip_tags($_POST['mail']));
      $message = trim(strip_tags($_POST['message']));
 
      mail('luchkinshad@yandex.ru', 'Заказ дома и бани', 
      'Вам написал: '.$name.'<br />Номер телефона заказчика: '.$phone.'<br />Почта заказчика: '.$mail.'<br />
      Сообщение: '.$message,"Content-type:text/html;charset=utf-8");
 
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