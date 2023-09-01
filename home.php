<?php
include_once 'db_connect.php';
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


    <!-- Style css -->
    <style>
        :root {
            --darkblue-color: #143649;
            --blue-color: #20627c;
        }

        header {
            background-color: #20627c;
            background: var(--blue-color);
        }

        body {
            background-color: #143649;
            background: var(--darkblue-color);
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="container-fluid">
                <img src="web_imgs/white_coffee_logo.png" class="img-fluid rounded-start" alt="" width="80" height="80">
            </div>
        </nav>
        
        <!-- ======= Sidebar ======= -->
        <aside id="sidebar" class="sidebar">
            <ul class="sidebar-nav" id="sidebar-nav">

                <li class="nav-item">
                    <a class="nav-link collapsed" href="index.php?page=coffee">
                        <i class="bi bi-pin-angle-fill"></i>
                        <span>Coffee</span>
                    </a>
                </li><!-- End of coffee -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="index.php?page=tea">
                        <i class="bi bi-pin-angle-fill"></i>
                        <span>Tea</span>
                    </a>
                </li><!-- End of Tea -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="index.php?page=mocktail">
                        <i class="bi bi-pin-angle-fill"></i>
                        <span>Mocktail</span>
                    </a>
                </li><!-- End of Mocktail -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="index.php?page=smoothie">
                        <i class="bi bi-pin-angle-fill"></i>
                        <span>Smoothie</span>
                    </a>
                </li><!-- End of Smoothie -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="index.php?page=soda">
                        <i class="bi bi-pin-angle-fill"></i>
                        <span>Soda</span>
                    </a>
                </li><!-- End of Soda -->
            </ul>
        </aside><!-- End Sidebar-->
    </header>

</body>

</html>