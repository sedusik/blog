<?php
include ("app/database/db.php");

$errMsg = '';

//Код для формы регистрации
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])){
    $login = trim($_POST['login']);
    $email = trim($_POST['mail']);
    $passF = trim($_POST['pass-first']);
    $passS = trim($_POST['pass-second']);
//    $pass = password_hash($_POST['pass-second'], PASSWORD_DEFAULT);
    $admin = 0;

    if($login === '' || $email === '' || $passF === ''){
      $errMsg = 'Не все поля заполнены!';
    }elseif (mb_strlen($login, 'UTF8') < 3){
        $errMsg = 'Логин должен быть более 3-х символов!';
    } elseif ($passF !== $passS){
        $errMsg = 'Пароли должны быть одинаковыми!';
    } else{
        $existence = selectOne('users', ['email' => $email]);
        if (!empty($existence['email']) && $existence['email'] === $email) {
            $errMsg = 'Пользователь с такой электронной почтой уже зарегестрирован!';
        }else{
            $pass = password_hash($passF, PASSWORD_DEFAULT);
            $post = [
                'admin' => $admin,
                'user_name' => $login,
                'email' => $email,
                'password' => $pass
            ];
            $id = insert('users',$post);
            $user = selectOne('users', ['id' => $id]);

            $_SESSION['id'] = $user['id'];
            $_SESSION['login'] = $user['user_name'];
            $_SESSION['admin'] = $user['admin'];
            if($_SESSION['admin']){
                header('location:' . BASE_URL . "admin/posts/index.php");
            }
            else {
                header('location:' . BASE_URL);
            }

        }
    }


    //       $last_row = selectOne('users', ['id' => $id]);
} else {
    $login = '';
    $email = '';

}
//Код для формы авторизации
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["button-log"])){
    $email = trim($_POST['mail']);
    $pass = trim($_POST['password']);
    if($email === '' || $pass === '') {
        $errMsg = 'Не все поля заполнены!';
    }else {
        $existence = selectOne('users', ['email' => $email]);
        if ($existence && password_verify($pass, $existence ['password'])){
        // если $existence существует(bool true), то есть пользователь ввел емейл, который есть в базе и пароль соответствует хэшированному паролю - АВТОРИЗОВАТЬ
        $_SESSION['id'] = $existence['id'];
        $_SESSION['login'] = $existence['user_name'];
        $_SESSION['admin'] = $existence['admin'];
             if($_SESSION['admin']){
            header('location:' . BASE_URL . "admin/posts/index.php");
            }
            else {
            header('location:' . BASE_URL);
            }
         }else{
        //ОШИБКА АВТОРИЗАЦИИ
        $errMsg = "Электронная почта или пароль введены не верно!";
        }
    }
} else{
    $email = '';
}




