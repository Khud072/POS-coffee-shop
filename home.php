<?php
include_once 'db_connect.php';
$table = $_POST["submit"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU</title>
    <!-- Bootstap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- CSS style -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <!-- Nav and Hamberger -->

        <div class="navbar col-12 fixed-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col m-1">
                        <div class="hamburger">
                            <img class="hamburger" src="web_imgs/hamburger.png" alt="Hamburger Icon" width="80">
                        </div>
                    </div>
                    <div class="col m-4">
                        <?php echo "<h1>$table</h1>" ?>
                    </div>
                    <div class="col m-2">
                        <a class="navbar-brand" href="#">
                            <img src="web_imgs/cart.png" alt="" width="70">
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <main>
        <section>
            <!-- Side bar -->
            <aside class="sidebar">
                <ul class="menu" id="menu">

                    <li class="menu-item">
                        <a class="nav-link collapsed" href="menu_coffee.php?page=coffee">
                            <i class="bi bi-cup-hot-fill"></i>
                            <span>Coffee</span>
                    </li><!-- End of coffee -->

                    <li class="menu-item">
                        <a class=" nav-link collapsed" href="tea.php?page=tea">
                            <i class="bi bi-cup-hot-fill"></i>
                            <span>Tea</span>
                        </a>
                    </li><!-- End of Tea -->

                    <li class="menu-item">
                        <a class="nav-link collapsed" href="mocktail.php?page=mocktail">
                            <i class="bi bi-cup-hot-fill"></i>
                            <span>Mocktail</span>
                        </a>
                    </li><!-- End of Mocktail -->

                    <li class="menu-item">
                        <a class="nav-link collapsed" href="smoothie.php?page=smoothie">
                            <i class="bi bi-cup-hot-fill"></i>
                            <span>Smoothie</span>
                        </a>
                    </li><!-- End of Smoothie -->

                    <li class="menu-item">
                        <a class="nav-link collapsed" href="soda.php?page=soda">
                            <i class="bi bi-cup-hot-fill"></i>
                            <span>Soda</span>
                        </a>
                    </li><!-- End of Soda -->

                </ul>
            </aside>
        </section>
        <!-- JS script -->
        <script href="js/jquery.js"></script>
        <script href="js/script.js"></script>
    </main>
</body>

</html>