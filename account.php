<?php
    include("path.php");
    
    include("app/controllers/topics.php");
    $post = selectOne('users', ['id' => $_SESSION['id']]);
    $array = array();
    $gamesAll= [];
    $currentUserCart = selectAllOrderUser('order_user', ['id_user' => $_SESSION['id']]);
    foreach($currentUserCart as $ordUserOne){
      array_push($array, $ordUserOne['id']);
    }
   
    $text = implode("", $array);
    
    $currentGameOrder = selectAllGameUser('order_games', $array 
    
    );
    
    foreach($currentGameOrder as $gameOrd){
      array_push($gamesAll, $gameOrd['id_game']);
    }
    // tt($currentGameOrder);
    $currentGameNameOrder =selectAllInner('games', $array, 'order_games', 'order_user');
    
    // implode
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

  
  <div class="container mt-5 mb-5 map__container pay__container">
 
    <div class="row justify-content-center">
      <div class="col-12 map__column">
      <div class="row justify-content-center">
          
          <div class="col-12 col-md-8">
            <h2 class="my-2">Личный кабинет</h2>
          </div>
          <div class="col-12 col-md-8 d-flex flex-row">
            <img src="<?=BASE_URL . 'image/empty-avatar.png'?>" class="me-3">
            <div class="d-flex flex-column">
              <p class="fs-4 mb-0"><?=$post['userName']?></p>
              <p class="fs-6 mb-0"><?=$post['email']?></p>
              <p class="fs-6 mb-0"><?=$post['created']?></p>
            </div>
           
          </div>
          <div class="col-12 col-md-8">
            <h4 class="my-2">Заказы</h4>
          </div>
          <?php if(!empty($currentGameOrder)):?>
          <div class="col-12 col-md-8 d-lg-block d-none justify-content-center">
            <div class="row ">
              <div class="col-6 col-md-3 col-xl-2"><p>Дата заказа</p></div>
              <div class="col-6 col-md-2 col-xl-2"><p>№ заказа</p></div>
              <div class="col-6 col-md-2 col-xl-2"><p>Статус</p></div>
              <div class="col-6 col-md-3 col-xl-4"><p>Название товара</p></div>
              <div class="col-6 col-md-2 col-xl-2"><p>Сумма</p></div>
            </div>
          </div>       
              
          <div class="col-12 col-md-8 ">
            <div class="row ">
            <!-- $currentUserCart
            $currentGameOrder
            $currentGameNameOrder -->
            <?php //foreach ($currentUserCart as $ordUserOne):?>
              <?php // $newUs = current($ordUserOne); ?>
              <?php foreach ($currentGameNameOrder as $game): ?>
                <?php ?>
             <div class="row  mb-3 orders">
              <div class="col-6 col-md-6 col-xl-2 d-block d-lg-none"><p>Дата заказа:</p></div>
              <div class="col-6 col-md-3 p-0 col-xl-2"><?=substr($ordUserOne['created'],0,10);?></p></div>

              <div class="col-6 col-md-6 col-xl-2  d-block d-lg-none"><p>№ заказа:</p></div>
              <div class="col-6 col-md-2 p-0 col-xl-2"><p><?=$game['id_order'];?></p></div>

              <div class="col-6 col-md-6 col-xl-2  d-block d-lg-none"><p>Статус:</p></div>
              <div class="col-6 col-md-2 col-xl-2 p-0 ps-lg-2"><p>Сбор заказа</p></div>

              <div class="col-6 col-md-6 col-xl-4  d-block d-lg-none"><p>Название товара:</p></div>
              <div class="col-6 col-md-3 col-xl-4 p-0 ps-lg-3"><p><?=$game['name'] ;?></p></div>

              <div class="col-6 col-md-6 col-xl-2  d-block d-lg-none"><p>Сумма:</p></div>
              <div class="col-6 col-md-2 col-xl-2 price-padd"><p><?=$game['price'] ;?> ₽</p></div>
              
            </div>
            <?php endforeach;?>
              
            <?php //endforeach;?>
            <?php else: ?>
                <div class="row justify-content-start justify-content-md-center mb-3">
                  <div class="col-8 ps-0"><p>Вы не совершили ни одного заказа</p></div>
                </div>
              <?php endif;?>
        </div>
    </div>
  </div>
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