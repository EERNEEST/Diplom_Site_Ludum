<?php
    include("path.php");
    include("app/controllers/users.php");
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

    <div class="container my-2 reg">
        
        <form class="row justify-content-center" method="post" action="registr.php">
            <h2>Форма регистрации</h2>
            <div class="mb-3 col-12 col-lg-4 col-md-6 err">
                <p><?=$errMsg?></p>
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-lg-4 col-md-6">
                <label for="formGroupExampleInput" class="form-label">Ваш логин</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="login" value="<?=$login?>" placeholder="введите ваш логин...">
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-lg-4 col-md-6">
                <label for="exampleInputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail" name="mail" value="<?=$email?>" aria-describedby="emailHelp">
                <div class="form-text" id="emailHelp">Ваш email адрес не будет использован для спама!</div>
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-lg-4 col-md-6">
                <label class="form-label" for="exampleInputPassword1">Пароль</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="pass-first">
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-lg-4 col-md-6">
                <label class="form-label" for="exampleInputPassword2">Повторите пароль</label>
                <input type="password" class="form-control" id="exampleInputPassword2" name="pass-second">
            </div>
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-lg-4 col-md-6">
                <div class="row">
                    <div class="col-6">
                        <button type="submit" class="btn" name="button-reg">Зарегистрироваться</button>
                    </div>
                    <div class="col-6 my-auto d-flex justify-content-end">
                        <a  href="<?php echo BASE_URL . 'login.php'?>">Войти</a>
                    </div>
                </div>
                
                
            </div>
        </form>
    </div>



    <?php
    include("app/include/footer.php");
    ?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="javascript/script.js"></script>
</body>
</html>  