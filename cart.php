<?php
    include("path.php");
    include("app/controllers/users.php");
    $_SESSION['allPriceOrder']=0; 
    foreach($_SESSION['cart'] as $value){
      if(intval($value['price']))
        $_SESSION['allPriceOrder']+=intval($value['price']); 
    };
    
    if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['get'])){
      $get = selectOneGame('games', $_GET['get']);
      $_SESSION['allPriceOrder']=0; 
      
      if(count($_SESSION['cart']) >= 0) {         
        // foreach($_SESSION['cart'] as $value){
        //   $index = array_search($get, $value);
        // }
        
        $est = in_array($get, $_SESSION['cart']);
        if(empty($est)){
          array_push($_SESSION['cart'], $get);
          foreach($_SESSION['cart'] as $value){
            if(intval($value['price']))
              $_SESSION['allPriceOrder']+=intval($value['price']); 
           
          }
          
        }
        else{
          header('location:' . BASE_URL . 'singleGame.php?post='.$_GET['get'].'');
        }
      }
      // elseif(count($_SESSION['cart'])==0) {
      //   array_push($_SESSION['cart'], $get);
      // }
      // if($index != 0){
      //   header('location:' . BASE_URL . 'singleGame.php?post='.$_GET['get'].'');
      // }
      // else{
      //   array_push($_SESSION['cart'], $get);
      // }
      
      //$_SESSION['cart'] += $get;
     
    }
   
    $ord = $_SESSION['cart'];
  
   
    // if(!isset($_SESSION['cartUser'])){
    //   $_SESSION['cartUser'] = array();
    // }
    // $prodId = isset($_GET['get']) ? $_GET['get'] : null;
    // if(!empty($prodId)){
    // $_SESSION['cartUser'] = $prodId;
    // Header("Location: index.php?product_id={$prodId}");
    // }
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
      <form action="cart.php" method="post" class="row justify-content-center">
       
          
          <div class="col-12 col-md-8">
            <h2 class="my-2">Оформление заказа</h2>
          </div>
          <?php if(count($ord)>0):?>
            <div class="col-12 col-md-8 ">
              <?=$errMsg;?>
            </div>
               
          <div class="col-12 col-md-8 d-lg-block d-none">
            <div class="row ">
              <div class="col-7 col-xl-8"><p>Название</p></div>
              <div class="col-2 col-xl-2"><p>Цена</p></div>
              <div class="col-3 col-xl-2"><p>Управление</p></div>
            </div>
          </div>
          
                  
              
          <div class="col-12 col-md-8">
            <div class="row ">
            <?php if(count($ord) > 0): ?>
              
              <?php  foreach($ord as $ordOne): ?>
              <div class="col-7 col-xl-8"><p><img style="width:50px; height:50px;" src="<?=BASE_URL . 'assets/posts/' . $ordOne['image']?>"><?=$ordOne['name']?></p></div>
              <div class="col-2 col-xl-2 py-2"><p><?=$ordOne['price']?></p></div>
              <?php  $index = array_search($ordOne, $ord);?>
              
              <a href="cart.php?del_id=<?=$index;?>" class="col-3 col-xl-2 btn">Удалить</a>
              <?php endforeach; ?>
            <?php endif; ?>
            </div>
           
          </div>
          <div class="col-12 col-md-8">
            <div class="row ">
              <div class="col-6 col-xl-9">
                
              <p id="price" class="fs-4"><?=$_SESSION['allPriceOrder']?> ₽</p>
               
              </div>
              
             
              
              <div class="col-6 col-xl-3 ">
                <button type="submit" name="oformOrder" class="btn float-end btn-cart-ofrom">Оформить заказ</button>
                
              </div>
            </div>
            
            
          </div>
          <?php else:?>
            <p class="col-12 col-md-8" >Ваша корзина пуста <br><?=$errMsg;?></p>
          </form>
          
          <?php endif;?>
      </div>
    </div>
  </div>
  
  
  <?php
    include("app/include/footer.php");
  ?>
  <script src="javascript/scriptCart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  
</body>
</html>     