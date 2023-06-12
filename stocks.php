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
    
    
    <title>Document</title>
</head>
<body>
 
  <?php
    include("app/include/header.php");
  ?>

  
  <div class="container mt-5 mb-5 stock-container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 stocks">
        <div class="row">
          <div class="col-12  col-lg-6 p-3 stocks__image">
            <img class="" src="image/birthday.jpg">
          </div>
          <div class="col-12 col-lg-6 p-3">
            <h3 class="">Скидка в день рождение!</h3>
            <p class="mt-2"> В честь дня рождения именинника, дарим скидку в 10% на любой товар из асортимента магазина</p>
            <p class="mt-2"> Акция действует в день рождение и два дня после него. Для получения скидки необходимо предъявить паспорт сотруднику магазина</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-8 mt-4 stocks">
        <div class="row">
          <div class="col-12  col-lg-6 p-3 stocks__image">
            <img class="" src="image/childrenday.jpg">
          </div>
          <div class="col-12 col-lg-6 p-3">
            <h3 class="">День защиты детей!</h3>
            <p class="mt-2"> В светлый праздник в честь детей предлагаем скидку всей семье!</p>
            <p class="mt-2"> Предложение действует в ограниченное время с 27 мая по 3 июня</p>
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