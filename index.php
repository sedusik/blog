<?php
        include 'path.php';
        include 'app/controllers/category.php';
?>

<!DOCTYPE html>
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
<?php include ("app/include/header.php");?>
<!--блок карусели старт-->
<div class="container">
    <div class="row">
        <h2 class="slider-title">Популярные публикации</h2>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/image3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption carousel-caption-hack d-none d-md-block">
                    <h5><a href=""></a> slide label</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/kmrw6rvhyrn1apxvwolx.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption carousel-caption-hack d-none d-md-block">
                    <h5><a href=""></a> slide label</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/og_og_1479659454241945683.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption carousel-caption-hack d-none d-md-block">
                    <h5><a href=""></a> slide label</h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!--блок карусели end-->

<!--блок main start-->
<div class="container">
    <div class="content row">
        <div class="main-content col-md-9 col-12">
            <h2>Последние публикации</h2>
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/image3.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Cтатья 1</a>
                    </h3>
                    <i class="far fa-user">Имя автора</i>
                    <i class="far fa-calender">May 19, 2023</i>
                    <p class="preview-text">
                        Описание статьи
                    </p>
                </div>
            </div>
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/og_og_1479659454241945683.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Cтатья 2</a>
                    </h3>
                    <i class="far fa-user">Имя автора</i>
                    <i class="far fa-calender">May 19, 2023</i>
                    <p class="preview-text">
                        Описание статьи
                    </p>
                </div>
            </div>
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/og_og_1479659454241945683.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Cтатья 3</a>
                    </h3>
                    <i class="far fa-user">Имя автора</i>
                    <i class="far fa-calender">May 19, 2023</i>
                    <p class="preview-text">
                        Описание статьи
                    </p>
                </div>
            </div>
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/og_og_1479659454241945683.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Cтатья 4</a>
                    </h3>
                    <i class="far fa-user">Имя автора</i>
                    <i class="far fa-calender">May 19, 2023</i>
                    <p class="preview-text">
                        Описание статьи
                    </p>
                </div>
            </div>
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/og_og_1479659454241945683.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Cтатья 5</a>
                    </h3>
                    <i class="far fa-user">Имя автора</i>
                    <i class="far fa-calender">May 19, 2023</i>
                    <p class="preview-text">
                        Описание статьи
                    </p>
                </div>
            </div>
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/og_og_1479659454241945683.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Cтатья 6</a>
                    </h3>
                    <i class="far fa-user"> Имя автора </i>
                    <i class="far fa-calendar"> May 19, 2023 </i>
                    <p class="preview-text">
                        Описание статьи
                    </p>
                </div>
            </div>
        </div>

<!--        Sidebar Content-->

        <div class="sidebar col-md-3">
            <div class="section search">
                <h3>Поиск</h3>
                <form action="/" method="post">
                    <input type="text" name="search-term" class="text-input" placeholder="Введите слово...">
                </form>
            </div>

            <h3>Категории</h3>
            <ul>
                <?php foreach ($allCategory as $key => $cat): ?>
                <li>
                    <a href="#">П<?=$cat['name']; ?></a>
                </li>
                <?php endforeach; ?>
        </div>
    </div>
</div>

<!--блок main end-->

<!--FOOTER-->
<?php include ("app/include/footer.php"); ?>
<!--END FOOTER-->


</body>
</html>
