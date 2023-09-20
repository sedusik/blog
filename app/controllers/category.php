<?php

include SITE_ROOT . "/app/database/db.php";

$errMsg = '';
$id = '';
$name = '';
$description = '';

$allCategory = selectAll('category');

//Код для формы создания категории
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['topic-create'])){

//    tt($_POST);
//    exit();
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);

    if($name === '' || $description === ''){
        $errMsg = 'Не все поля заполнены!';
    }elseif (mb_strlen($name, 'UTF8') < 3){
        $errMsg = 'Категория должна быть более 3-х символов!';
    } else{
        $existence = selectOne('category', ['name' => $name]);
        if (!empty($existence['name']) && $existence['name'] === $name) {
//        if ($existence['email'] === $email){ - вариант Андриевского
            $errMsg = 'Такая категория уже есть в базе!';
        }else{
            $cat = [
                'name' => $name,
                'description' => $description
            ];
            $id = insert('category',$cat);
            $cat= selectOne('category', ['id' => $id]);
            header('location: '. BASE_URL . '/admin/category/index.php');
        }
    }

} else {
    $name = '';
    $description = '';

}

//Редактирование категории

if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
    $id = $_GET['id'];
    $cat = selectOne('category', ['id' => $id]);
    $id = $cat['id'];
    $name = $cat['name'];
    $description = $cat['description'];


}
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['topic-edit'])){

    $name = trim($_POST['name']);
    $description = trim($_POST['description']);

    if($name === '' || $description === ''){
        $errMsg = 'Не все поля заполнены!';
    }elseif (mb_strlen($name, 'UTF8') < 3){
        $errMsg = 'Категория должна быть более 3-х символов!';
    } else{
            $cat = [
                'name' => $name,
                'description' => $description
            ];
            $id = $_POST['id'];
            $cat_id= update('category', $id, $cat);
            header('location: '. BASE_URL . '/admin/category/index.php');
        }


}

//Удаление категории

if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete-id'])){
    $id = $_GET['delete-id'];
    delete('category', $id);
    header('location: '. BASE_URL . '/admin/category/index.php');


}