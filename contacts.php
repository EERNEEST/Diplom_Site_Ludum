<?php
    include("path.php");
    
    include("app/controllers/topics.php");
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    
    <title>Ludum</title>
</head>
<body>
 
  <?php
    include("app/include/header.php");
  ?>

  
  <div class="container mt-5 mb-5 map__container">
    <div class="row justify-content-center">
      <div class="col-12 map__column">
        <div class="row">
          <div class="col-12 my-2">
            <h2>Адреса магазинов</h2>
          </div>
          <div class="col-12">
          <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ab2c243dd932a0ed560f8ab030fc350316e4216f094e782c7e48caaf00e40d382&amp;source=constructor" width="100%" height="437" frameborder="0"></iframe>
          </div>
          <div class="col-12">
            <p class="lh-lg">
            Если Вы хотите самостоятельно забрать Ваш онлайн-заказ из нашего магазина, то после оформления рекомендуем дождаться уведомления о готовности заказа по электронной почте, указанной Вами в личном кабинете. 
            Это важно, так как формирование заказа может занять некоторое время, необходимое для доставки отдельных позиций с центрального склада.
            Обратите внимание, что срок хранения Вашего заказа в нашем магазине составляет 4 дня. Вы можете продлить срок хранения заказа, связавшись с нами по телефону +7 (4852) 14-22-55 или написав на почту oxapkin_nikita@mail.ru
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  <?php
    include("app/include/footer.php");
  ?>
  <script src="javascript/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  
</body>
</html>     