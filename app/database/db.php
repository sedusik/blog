<?php

session_start();
require ('conect.php');

function tt($value)
{
    echo '<pre>';
    print_r($value);
    echo '</pre>';
    exit();
}

// проверка выполнения запроса к БД
function dbCheckError($query)
{
    $errInfo = $query->errorInfo();
    if ($errInfo[0] !== PDO::ERR_NONE){
        echo $errInfo[2];
        exit();
    }
    return true;
}
//запрос на получение данных c одной таблицы
function selectAll($table, $params = []){
    global $pdo;
    $sql = "SELECT * FROM $table";
    if(!empty($params)){
        $i = 0;
        foreach ($params as $key => $value){
            if (!is_numeric($value)){
                $value = "'".$value."'";
            }
            if ($i === 0){
                $sql = $sql . " WHERE $key=$value";
            } else{
                $sql = $sql . " AND $key=$value";
            }
            $i ++;
        }
    }


    $query = $pdo->prepare($sql);
    $query->execute();

    dbCheckError($query);

    return $query->fetchAll();

}

//запрос на получение данных одной строки c выбранной таблицы
function selectOne($table, $params = []){
    global $pdo;
    $sql = "SELECT * FROM $table";
    if(!empty($params)){
        $i = 0;
        foreach ($params as $key => $value){
            if (!is_numeric($value)){
                $value = "'".$value."'";
            }
            if ($i === 0){
                $sql = $sql . " WHERE $key=$value";
            } else{
                $sql = $sql . " AND $key=$value";
            }
            $i ++;
        }
    }
//    $sql = $sql . " LIMIT 1";
    $query = $pdo->prepare($sql);
    $query->execute();

    dbCheckError($query);

    return $query->fetch();

}


//$params = [
//    'admin' => 1,
//    'user_name' => 'Tanya'
//];

//tt(selectAll('users', $params));
//tt(selectOne('users'));


// запись в таблицу БД

function insert($table, $params){
    global $pdo;
    //INSERT INTO `users` (admin, user_name, email, password) VALUES ( '1', '44', 'for@test.com', '4444');
    $i = 0;
    $coll = '';
    $mask = '';
    foreach ($params as $key => $value){
        if($i === 0){
            $coll = $coll ."$key";
            $mask = $mask ."'" . "$value" . "'";
        }
        else{
            $coll = $coll .", $key";
            $mask = $mask . ", '" . "$value" . "'";
        }
        $i++;
    }

    $sql = "INSERT INTO $table ($coll) VALUES ($mask)";



    $query = $pdo->prepare($sql);
    $query->execute($params);
    dbCheckError($query);
    return $pdo->lastInsertId();
}

$arrData = [
    'admin'=> '0',
    'user_name' => '11111568767',
    'email' => '9768375557@mail.ru',
    'password' => 'dsl56785kgnldfjn'
];

//insert('users', $arrData);

// Обновление строки в таблице

function update($table, $id, $params){
    global $pdo;
    //INSERT INTO `users` (admin, user_name, email, password) VALUES ( '1', '44', 'for@test.com', '4444');
    $i = 0;
    $str = '';
    foreach ($params as $key => $value){
        if($i === 0){
            $str = $str . $key . " = '" . $value . "'";
        }
        else{
            $str = $str .", " . $key . " = '" . $value . "'";
        }
        $i++;
    }

//UPDATE `users` SET 'admin' = '1', 'password = '66666' WHERE 'id' = '2';

    $sql = "UPDATE $table SET $str WHERE id = $id";

//    tt($sql);
//    exit();
    $query = $pdo->prepare($sql);
    $query->execute($params);
    dbCheckError($query);
}

//$param = [
//    'admin'=> '0',
//    'password' => '333'
//];
//
//update('users', 6, $param);

// Удаление
function delete($table, $id)
{
    global $pdo;
    //DELETE FROM `users` WHERE id = 1
    $sql = "DELETE FROM $table WHERE id =". $id;
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
}
//delete('users', 1);

//Выборка записей (posts) с автором в админку

function selectAllFromPostsWithUsers($table1, $table2){
    global $pdo;
    $sql = "SELECT 
    t1.id,
    t1.title,
    t1.img,
    t1.content,
    t1.status,
    t1.id_topic,
    t1.created_date,
    t2.user_name
    FROM $table1 AS t1 JOIN $table2 AS t2 ON t1.id_user = t2.id";
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetchAll();

    }
