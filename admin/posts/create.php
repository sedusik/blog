<?php
include "../../path.php";
include "../../app/controllers/posts.php";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel ="stylesheet" href="../../assets/css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bellota:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6fba097ec9.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
<!--    Добавление редактора к текстовому полю админки-->
    <script src="../../assets/js/js.js"></script>
</head>
<body>
<?php include ("../../app/include/header-admin.php");?>

<div class="container">
<?php include("../../app/include/sidebar-admin.php");?>
        <div class="posts col-9">
            <div class="button row">
                <a href="create.php" class="col-3 btn btn-success">Добавить пост</a>
                <span class="col-1"></span>
                <a href="index.php" class="col-3 btn btn-warning">Управлять постами</a>
            </div>
            <div class="row title-table">
                <h2>Добавление поста</h2>
            </div>
            <div class="row add-post">
                <div id="last" class="mb-12 col-12 col-md-12 error">
                    <!-- Вывод массива с ошибками-->
                    <?php include("../../app/helps/errorInfo.php");?>
                </div>
                <form action="create.php" method="post"enctype="multipart/form-data">
                    <div class="col mb-4">
                        <input value="<?=$title; ?>" name= "title" type="text" class="form-control" placeholder="Title" aria-label="Название статьи">
                    </div>
                    <div class="сol">
                        <label for="editor" class="form-label">Содержание поста</label>
                        <textarea name="content" id="editor" class="form-control" rows="6"><?=$content; ?></textarea>
                    </div>
                    <div class="input-group col mb-4 mt-4">
                        <input name="img" type="file" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>
                    <select name="topic" class="form-select mb-2" aria-label="Default select example">
                        <option selected>Выбрать категорию</option>
                        <?php foreach ($allCategory as $key => $cat): ?>
                            <option value="<?=$cat['id']?>"><?=$cat['name'];?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="form-check">
                        <input name="publish" class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Опубликовано
                        </label>
                    </div>
                    <div class="col col-6">
                        <button name="add_post" class="btn btn-primary" type="submit">Добавить публикацию</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include ("../../app/include/footer.php"); ?>


<script src="../../assets/js/js.js"></script>
</body>
</html>