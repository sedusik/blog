<header class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>
                    <a href="<?php echo BASE_URL?>">Блог о технологиях</a>
                </h1>
            </div>
            <nav class="col-8">
                <ul>
                    <li><a href="<?php echo BASE_URL?>">Главная</a> </li>
                    <li><a href="#">Об авторе</a> </li>
                    <li><a href="#">Услуги</a> </li>
                    <li>
                        <?php if(isset($_SESSION['id'])):?>
                            <a href="#">
                                <i class="fa-regular fa-circle-user"></i>
                                <?php echo $_SESSION['login']; ?>
                            </a>
                            <ul>
                                <?php if($_SESSION['admin']):?>
                                <li><a href="<?php echo BASE_URL . "admin/category/index.php";?>">Админ панель</a> </li>
                                <?php endif;?>
                                <li><a href="<?php echo BASE_URL . "logout.php";?>">Выход</a> </li>
                            </ul>
                        <?php else: ?>
                            <a href="<?php echo BASE_URL . "log.php";?>">
                                <i class="fa-regular fa-circle-user"></i>
                                Войти
                            </a>
                            <ul>
                                <li><a href="<?php echo BASE_URL . "reg.php";?>">Регистрация</a> </li>
                            </ul>
                        <?php endif; ?>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

</header>
