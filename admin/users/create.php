<?php session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel ="stylesheet" href="../../assets/css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bellota:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6fba097ec9.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
<?php include ("../../app/include/header-admin.php");?>

<div class="container">
<?php include("../../app/include/sidebar-admin.php");?>
        <div class="posts col-9">
            <div class="button row">
                <a href="create.php" class="col-3 btn btn-success">Добавить пользователя</a>
                <span class="col-1"></span>
                <a href="index.php" class="col-3 btn btn-warning">Управлять пользователями</a>
            </div>
            <div class="row title-table">
                <h2>Добавление пользователя</h2>
            </div>
            <div class="row add-post">
                <form action="create.php" method="post">
                    <div class="сol">
                        <label for="formGroupExampleInput" class="form-label">Логин</label>
                        <input name = "login" value="<?=$login?>" type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите логин">
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input name = "mail" value="<?=$email?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="col">
                        <label for="exampleInputPassword1" class="form-label">Пароль</label>
                        <input name = "pass-first" type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="col">
                        <label for="exampleInputPassword2" class="form-label">Подтверждение пароля</label>
                        <input name = "pass-second" type="password" class="form-control" id="exampleInputPassword2">
                    </div>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Пользователь</option>
                        <option value="1">Админ</option>
                    </select>
                    <div class="col">
                        <button class="btn btn-primary" type="submit">Создать пользователя</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include ("../../app/include/footer.php"); ?>



</body>
</html>