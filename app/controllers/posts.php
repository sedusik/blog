<?php

include "../../path.php";
include SITE_ROOT . "/app/database/db.php";
if (!$_SESSION){
    header('location: ' . BASE_URL . 'log.php');
}

$errMsg = [];
$id = '';
$title = '';
$content = '';
$img = '';
$cat = '';

$allCategory = selectAll('category');
$posts = selectAll('posts');
$postsAdm = selectAllFromPostsWithUsers('posts','users');

//Код для формы создания публикации
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_post'])) {

    if(!empty($_FILES['img']["name"])){
        $imgName = time() . "_" . $_FILES['img']['name'];
        $fileTmpName = $_FILES['img']['tmp_name'];
        $fileType = $_FILES['img']['type'];
        $destination = ROOT_PATH . "\assets\images\posts\\" . $imgName;

        if(strpos($fileType, 'image') === false){
            array_push($errMsg, "Загружаемый файл не является изображением");
        }else {
            $result = move_uploaded_file($fileTmpName, $destination);

            if ($result) {
                $_POST['img'] = $imgName;
            } else {
                array_push($errMsg, "Ошибка загрузки изображения на сервер!");
            }
        }
    }else{
        array_push($errMsg, "Ошибка получения изображения!");
    }

    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $cat = trim($_POST['topic']);
    $publish = isset($_POST['$publish']) ? 1 : 0;


    if ($title === '' || $content === '' || $cat=== '') {
        array_push($errMsg, "Не все поля заполнены!");
    } elseif (mb_strlen($title, 'UTF8') < 7) {
        array_push($errMsg, "Название должно быть более 7-и символов!");
    } else {
            $post= [
                'id_user' => $_SESSION['id'],
                'title' => $title,
                'img' => $_POST['img'],
                'content' => $content,
                'status' => $publish,
                'id_topic' => $cat
            ];

            $post = insert('posts', $post);
            $post = selectOne('posts', ['id' => $id]);
            header('location: ' . BASE_URL . '/admin/posts/index.php');
        }

} else {
    $title = '';
    $content = '';

}
//
////Редактирование категории
//
//if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
//    $id = $_GET['id'];
//    $cat = selectOne('category', ['id' => $id]);
//    $id = $cat['id'];
//    $name = $cat['name'];
//    $description = $cat['description'];
//
//
//}
//if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['topic-edit'])) {
//
//    $name = trim($_POST['name']);
//    $description = trim($_POST['description']);
//
//    if ($name === '' || $description === '') {
//        $errMsg = 'Не все поля заполнены!';
//    } elseif (mb_strlen($name, 'UTF8') < 3) {
//        $errMsg = 'Категория должна быть более 3-х символов!';
//    } else {
//        $cat = [
//            'name' => $name,
//            'description' => $description
//        ];
//        $id = $_POST['id'];
//        $cat_id = update('category', $id, $cat);
//        header('location: ' . BASE_URL . '/admin/category/index.php');
//    }
//
//
//}
//
////Удаление категории
//
//if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete-id'])) {
//    $id = $_GET['delete-id'];
//    delete('category', $id);
//    header('location: ' . BASE_URL . '/admin/category/index.php');
//
//
//}
