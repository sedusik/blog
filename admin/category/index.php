<?php

include "../../path.php";
include "../../app/controllers/category.php";
?>

<!DOCTYPE html>
<html lang="en">
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
                <a href="<?php echo BASE_URL . "admin/category/create.php"?>" class="col-3 btn btn-success">Добавить категорию</a>
                <span class="col-1"></span>
                <a href="<?php echo BASE_URL . "admin/category/index.php"?>" class="col-3 btn btn-warning">Управлять категориями</a>
            </div>
            <div class="row title-table">
                <h2>Управление категориями</h2>
                <div class="col-1">ID</div>
                <div class="col-5">Название категории</div>
                <div class="col-4">Управление</div>
            </div>
            <?php foreach ($allCategory as $key => $cat): ?>
            <div class="row post">
                <div class="id col-1"><?=$key + 1; ?></div>
                <div class="title col-5"><?=$cat['name']; ?></div>
                <div class="red col-2"><a href="edit.php?id=<?=$cat['id']; ?>">Изменить</a></div>
                <div class="del col-2"><a href="edit.php?delete-id=<?=$cat['id']; ?>">Удалить</a></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<?php include ("../../app/include/footer.php"); ?>



</body>
</html>