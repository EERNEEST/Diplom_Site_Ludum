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

  
  <div class="container mt-5 mb-5 map__container pay__container">
    <div class="row justify-content-center">
      <div class="col-12 map__column">
        <div class="row">
          <div class="col-12 payment">
            <h2 class="my-2">Оплата</h2>
            <p class="lh-lg">Выберите подходящий вам способ оплаты:</p>
            <p class="lh-lg fs-4">Наличные</p>
            <p class="lh-lg ">
            Вы отдаете деньги при получении товаров, и вместе с заказом вам выдаются все необходимые документы и кассовый чек.

            Оплатить заказ наличными вы можете:
            <ul>
              <li> При самовывозе из розничных магазинов "Ludum"</li>
            </ul>
           
            
            </p>
            <p class="lh-lg fs-4">Банковские карты</p>
            <p class="lh-lg">Оплатить заказ банковской картой вы можете:

            <ul>
              <li> В розничных магазинах и пунктах самовывоза</li>
            </ul>
           
           
            При самовывозе вы приезжаете в выбранную вами точку самовывоза, оплачиваете заказ банковской картой и забираете его. После оплаты вы получите все необходимые документы. Мы принимаем банковские карты платежных систем Visa, MasterCard и МИР. 

            Внимание! Оплата производится только в российских рублях. 
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