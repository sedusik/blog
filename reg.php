<?php
include ("path.php");
include ("app/controllers/users.php");
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel ="stylesheet" href="assets/css/css.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bellota:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/6fba097ec9.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
<!--HEADER-->
<?php include ("app/include/header.php");?>
<!--END HEADER-->

<!--FORM -->
<div class="container reg_form">
  <form class="row justify-content-center" method="post" action="reg.php">
    <h2>Форма регистрации</h2>
    <div class="mb-3 col-12 col-md-4 err">
          <p><?=$errMsg?></p>
    </div>
    <div class="w-100"></div>
    <div class="mb-3 col-12 col-md-4">
      <label for="formGroupExampleInput" class="form-label">Логин</label>
      <input name = "login" value="<?=$login?>" type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите логин">
    </div>
    <div class="w-100"></div>
    <div class="mb-3 col-12 col-md-4">
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input name = "mail" value="<?=$email?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">Мы никогда не поделимся вашей электронной почтой с кем-либо еще.</div>
    </div>
    <div class="w-100"></div>
    <div class="mb-3 col-12 col-md-4">
      <label for="exampleInputPassword1" class="form-label">Пароль</label>
      <input name = "pass-first" type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="w-100"></div>
    <div class="mb-3 col-12 col-md-4">
      <label for="exampleInputPassword1" class="form-label">Подтверждение пароля</label>
      <input name = "pass-second" type="password" class="form-control" id="exampleInputPassword2">
    </div>
    <div class="w-100"></div>
    <div class="mb-3 col-12 col-md-4">
      <button type="submit" class="btn btn-secondary" name ="button-reg">Отправить</button>
      <a href="aut.html">Войти</a>
    </div>
  </form>
</div>


<!--END FORM-->

<!--FOOTER-->
<?php include ("app/include/footer.php"); ?>
<!--END FOOTER-->