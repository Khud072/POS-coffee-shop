<?php
include_once 'db_connect.php';
$table = $_POST['submit'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU</title>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- CSS style -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <header class="fixed-top" style="background-color: #265c7b">
        <section class="header-nav">
            <nav class="navbar d-flex main-nav navbar-expand-sm">
                <div class="container-fluid">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <img src="web_imgs/white_coffee_logo.png" class="img-fluid rounded-start" alt="Logo" width="90">
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <img class="cart" src="web_imgs/cart.png" alt="Cart" width="75">
                        </li>
                    </ul>
                </div>
            </nav>
        </section>
        <section class="sub-nav">
            <nav class="navbar container-fluid" style="background-color: #427b91; height: 40px">
                <ul class="sub-nav-menu d-flex list-unstyled fw-bold ms-4">
                    <li><a href="#coffee" class="text-decoration-none text-white">COFFEE</a></li>
                </ul>
                <ul class="sub-nav-menu d-flex list-unstyled fw-bold">
                    <li><a href="#soda" class="text-decoration-none text-white">SODA</a></li>
                </ul>
                <ul class="sub-nav-menu d-flex list-unstyled fw-bold">
                    <li><a href="#smoothie" class="text-decoration-none text-white">SMOOTHIE</a></li>
                </ul>
                <ul class="sub-nav-menu d-flex list-unstyled fw-bold me-4">
                    <li><a href="#tea" class="text-decoration-none text-white">TEA</a></li>
                </ul>
            </nav>
        </section>
        <section class="modal-menu">
            <div class="container">
                <div class="modal-box">

                </div>
            </div>
        </section>
    </header>

    <main class="mt-5" style="position: absolute; top: 100px">
            <h3 id="coffee" class="text-white fw-bold ms-3">COFFEE</h3>
            <?php include('menu_coffee.php') ?>;

            <h3 id="soda" class="text-white fw-bold ms-3">SODA</h3>
            <?php include('menu_soda.php') ?>;

            <h3 id="smoothie" class="text-white fw-bold ms-3">SMOOTHIE</h3>
            <?php include('menu_smoothie.php') ?>;

            <h3 id="tea" class="text-white fw-bold ms-3">TEA</h3>
            <?php include('menu_tea.php') ?>
    </main>
    <?php
    $conn->close();
    ?>
</body>

</html>