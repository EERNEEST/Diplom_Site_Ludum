<?php

session_start();
require('connect.php');

function tt($value){
    echo '<pre>';
    print_r($value);
    echo '<pre>';
    exit();
}
// Проверка БД
function dbCheckError($query){
    $errInfo = $query->errorInfo();
    if($errInfo[0] !== PDO::ERR_NONE){
        echo $errInfo[2];
        exit();
    }
    return true;
}
// Запрос на получение данных из таблицы
function selectAll($table, $params =[]){
    global $pdo;
    $sql = "SELECT * FROM $table";

    if(!empty($params)){
        $i =0;
        foreach ($params as $key => $value){
            if(!is_numeric($value)){
                $value ="'".$value."'";
            }   
            if ($i === 0){
                $sql = $sql . " WHERE $key = $value";
            }
            else {
                $sql = $sql . " AND $key = $value";
            }
            $i++;
        }
    }
    
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetchAll();
}

// Запрос на получение одной строки данных из таблицы
function selectOne($table, $params =[]){
    global $pdo;
    $sql = "SELECT * FROM $table";

    if(!empty($params)){
        $i =0;
        foreach ($params as $key => $value){
            if(!is_numeric($value)){
                $value ="'".$value."'";
            }
            if ($i === 0){
                $sql = $sql . " WHERE $key = $value";
            }
            else {
                $sql = $sql . " AND $key = $value";
            }
            $i++;
        } 
    }
    
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetch();
}
// $sql = $sql . " LIMIT 1";
// Запрос на получение 4 строки данных из таблицы
function selectEight($table, $params =[]){
    global $pdo;
    $sql = "SELECT * FROM $table";

    if(!empty($params)){
        $i =0;
        foreach ($params as $key => $value){
            if(!is_numeric($value)){
                $value ="'".$value."'";
            }
            if ($i === 0){
                $sql = $sql . " WHERE $key = $value";
            }
            else {
                $sql = $sql . " AND $key = $value";
            }
            $i++;
        } 
    }
    $sql = $sql . " LIMIT 8";
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetchAll();
}
// Запрос на получение 4 c 4 строки данных из таблицы
function selectFour($table, $params =[]){
    global $pdo;
    $sql = "SELECT * FROM $table";

    if(!empty($params)){
        $i =0;
        foreach ($params as $key => $value){
            if(!is_numeric($value)){
                $value ="'".$value."'";
            }
            if ($i === 0){
                $sql = $sql . " WHERE $key = $value";
            }
            else {
                $sql = $sql . " AND $key = $value";
            }
            $i++;
        } 
    }
    $sql = $sql . " LIMIT 4 OFFSET 8";
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetchAll();
}
// Запрос на получение после 8 строки данных из таблицы
function selectAfter($table, $params =[]){
    global $pdo;
    $sql = "SELECT * FROM $table";

    if(!empty($params)){
        $i =0;
        foreach ($params as $key => $value){
            if(!is_numeric($value)){
                $value ="'".$value."'";
            }
            if ($i === 0){
                $sql = $sql . " WHERE $key = $value";
            }
            else {
                $sql = $sql . " AND $key = $value";
            }
            $i++;
        } 
    }
    $sql = $sql . " LIMIT 30 OFFSET 12";
    
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetchAll();
}
// Запрос на получение похожие игры
function selectPohoj($table, $params =[]){
    global $pdo;
    $sql = "SELECT * FROM $table";

    if(!empty($params)){
        $i =0;
        foreach ($params as $key => $value){
            if(!is_numeric($value)){
                $value ="'".$value."'";
            }
            if ($i === 0){
                $sql = $sql . " WHERE $key = $value";
            }
            else {
                $sql = $sql . " AND $key = $value";
            }
            $i++;
        } 
    }
    $sql = $sql . " LIMIT 4";
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetchAll();
}
// $params =[
//     'admin' => 1,
//     'email' => 'testPavel@mail.ru',
//     'username' => 'Павел'
// ];
// tt(selectAll('users'));

// Поиск по заголовку (простой)
function searchInName($text, $table1){
    $text = trim(strip_tags(stripcslashes(htmlspecialchars($text))));
    global $pdo;
    $sql ="SELECT * FROM $table1 AS p WHERE p.status = 1 AND p.name LIKE '%$text%'";

    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetchAll();
}
// Выборка записи с категорией для сингл
function selectOneGame($table1, $id){
    
    global $pdo;
    $sql ="SELECT * FROM $table1 AS p WHERE p.id = $id";

    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetch();
}
// Запрос на получение одной строки данных для заказов
function selectOneOrderUser($table, $params =[]){
    global $pdo;
    $sql = "SELECT * FROM $table";

    if(!empty($params)){
        $i =0;
        foreach ($params as $key => $value){
            if(!is_numeric($value)){
                $value ="'".$value."'";
            }
            if ($i === 0){
                $sql = $sql . " WHERE $key = $value";
            }
            else {
                $sql = $sql . " AND $key = $value";
            }
            $i++;
        } 
    }
    $sql = $sql . " ORDER BY created DESC LIMIT 1";
    
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetch();
}
// Запрос на получение всех строк данных для заказов
function selectAllOrderUser($table, $params =[]){
    global $pdo;
    $sql = "SELECT * FROM $table";

    if(!empty($params)){
        $i =0;
        foreach ($params as $key => $value){
            if(!is_numeric($value)){
                $value ="'".$value."'";
            }
            if ($i === 0){
                $sql = $sql . " WHERE $key = $value";
            }
            else {
                $sql = $sql . " AND $key = $value";
            }
            $i++;
        } 
    }
    
    
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetchAll();;
}
// Запрос на получение всех строк данных для игр одного клиента
function selectAllGameUser($table, $params =[]){
    global $pdo;
    $sql = "SELECT * FROM $table";

    if(!empty($params)){
        $i =0;
        foreach ($params as $value){
        
            if(!is_numeric($value)){
                $value ="'".$value."'";
            }
            if ($i === 0){
                $sql = $sql . " WHERE id_order = $value";
            }
            else {
                $sql = $sql . " OR id_order = $value";
            }
            $i++;
        } 
    }
    
    
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetchAll();;
}
// Запрос на получение всех строк данных для игр одного клиента
function selectAllGameNameUser($table, $params =[]){
    global $pdo;
    $sql = "SELECT * FROM $table";

    if(!empty($params)){
        $i =0;
        foreach ($params as $value){
        
            if(!is_numeric($value)){
                $value ="'".$value."'";
            }
            if ($i === 0){
                $sql = $sql . " WHERE id = $value";
            }
            else {
                $sql = $sql . " OR id = $value";
            }
            $i++;
        } 
       
        $query = $pdo->prepare($sql);
        $query->execute();
        dbCheckError($query);
        return $query->fetchAll();;
    }
    else{
       return;
    }
  
    
}
// Запрос на получение inner
function selectAllInner($table, $params =[], $table2, $table3){
    global $pdo;
    $sql = "SELECT t1.*,t2.*,t3.* FROM $table as t1 JOIN $table2 as t2 ON t1.id = t2.id_game JOIN $table3 as t3 ON t2.id_order = t3.id";
    if(!empty($params)){
        $i =0;
        foreach ($params as $value){
        
            if(!is_numeric($value)){
                $value ="'".$value."'";
            }
            if ($i === 0){
                $sql = $sql . " WHERE t2.id_order = $value";
            }
            else {
                $sql = $sql . " OR t2.id_order = $value";
            }
            $i++;
        } 
    }
    // else{
    //     $sql= $sql . " WHERE t2.id_order = t3.id";
    // }
    
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetchAll();
  
    
}
// Запись в таблицу
function insert($table, $params){
    global $pdo;

    $i=0;
    $col='';
    $mask='';
    foreach($params as $key => $value){
        if($i === 0){
            $col = $col . "$key";
            $mask = $mask ."'$value'";
        }
        else {
            $col = $col . ", $key";
            $mask = $mask . ", '$value'";
        }
        $i++;
    }
    $sql = "INSERT INTO $table ($col) VALUES ($mask)";
    // INSERT INTO `users` (`id`, `admin`, `userName`, `email`, `password`, `created`) VALUES (NULL, '1', 'Степан', 'Stepka228@mail.ru', 'uuqyw', current_timestamp());
    
    $query = $pdo->prepare($sql);
    
    $query->execute();
    
    dbCheckError($query);
    return $pdo->lastInsertId();
}
// $Array =[
//     'id' => "NULL",
//     'admin' => "0",
//     'userName' => 'Даниил',
//     'email' => 'danyavst@mail.ru',
//     'password' => '12345',
//     'created' => '2023-05-15 15:02:55'
// ];
$param =[
    'name' => "Павел"
];
$arrData = [
    "admin" => 0,
    "userName" => "Кирилл",
    "email" => "dasdas@mail.com",
    "password" => "qwesadzxc"
];

// Обновление строки в таблице
function update($table, $id, $params){
    global $pdo;

    $i=0;
    $str='';
    
    foreach($params as $key => $value){
        if($i === 0){
            $str = $str . $key . " = '" . $value . "'";
            
        }
        else {
            $str = $str . ", " . $key . " = '" . $value . "'";
        }
        $i++;
    }
    $sql = "UPDATE $table SET $str WHERE id = $id";
    
 
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
   
}
// $param =[
//     'userName' => "Павел"
// ];
// update('users', 3, $param);


// Удаление строки в таблице
function delete($table, $id){
    global $pdo;
    // DELETE FROM `users` WHERE 0
    $sql = "DELETE FROM $table WHERE id = $id";
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
   
}


// delete('users', 5);