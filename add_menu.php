<?php
// import file database
include_once 'db_connect.php';
$statusMsg = "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Import Bootstap5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <!-- Import Google font -->
    <link rel="stylesheet" href="https://fonts.google.com" type="text/css">

    <!-- CSS style -->
    <link rel="stylesheet" href="css/style.css">
        
    </style>

    <!-- Javascript vilidation -->
    <script>
        function validateForm() {
            const list = ["name", "type", "prices", "about", "file"];
            for (i = 0; i < list.length; i++) {
                let all_data = document.forms["myForm"][list[i]].value;
                if (all_data == "") {
                    alert("กรุณาใส่ข้อมูลให้ครบทุกช่อง");
                    return false;
                }
            }
        }
    </script>

    <title>Add your menu</title>
</head>

<body>
    <main>
        <div class="container">
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center">
                            <div class="card mb-3 card-body card-add-menu">

                                <div>
                                    <div class="d-flex justify-content-center">
                                        <a href="add_menu.php" class="logo d-flex align-items-center w-auto">
                                            <img src="web_imgs/coffee_logo.png" alt="Logo" width="120" height="120">
                                        </a>
                                    </div>
                                    <h6 class="card-title text-center fs-1 head-menu">NEW MENU</h6>
                                    <p class="text-center small fs-5">Create your new menu to in font of cafe</p>
                                </div>
                                
                                <form name="myForm" class="row g-3 needs-validated" onsubmit="return validateForm()" novalidate action="db_upload.php" method="POST" enctype="multipart/form-data">
                                    <div class="block1">
                                        <label for="name" class="sub-header form-label">The name is : </label>
                                        <div class="col-12 input-group">
                                            <input type="text" name="name" class="form-control" id="name" autofocus required />
                                            <div class="invalid-feedback">Please, enter the name!</div>
                                            <select class="form-select" id="type" name="type">
                                                <option value="coffee">Coffee</option>
                                                <option value="mocktial">Mocktial</option>
                                                <option value="smoothie">Smoothie</option>
                                                <option value="soda">Soda</option>
                                                <option value="tea">Tea</option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="block2 col-12">
                                        <label for="prices" class="sub-header form-label">Prices are :</label>
                                        <div class="input-group">
                                            <input type="number" name="prices" class="form-control" id="prices" placeholder="ตัวอย่าง : 99" required />
                                            <span class="input-group-text" id="inputGroupPrepend">บาท</span>
                                            <div class="invalid-feedback">Please enter prices!</div>
                                        </div>
                                    </div>

                                    <div class="block3 col-12">
                                        <label for="file" class="sub-header upload_img">Picture is :</label>
                                        <div>
                                            <input type="file" name="file" class="form-control" id="file" accept="image/gif, image/jpeg, image/png" required />
                                            <div class="invalid-feedback">Please, enter your picture!</div>
                                        </div>
                                    </div>

                                    <div class="block4 col-12">
                                        <label for="about" class="sub-header form-label">About menu : </label>
                                        <div>
                                            <textarea class="form-control" id="about" name="about" rows="3" required></textarea>
                                            <div class="invalid-feedback">Please, enter about menu!</div>
                                        </div>
                                    </div>

                                    <div class="block5 col-12">
                                        <button type="submit" name="submit" value="Upload" class="btn btn-primary w-100">CREATE NEW MENU</button>
                                    </div>

                                </form>
                                <div class="row">
                                    <?php if (!empty($statusMsg)) { ?>
                                        <div class="col-12">
                                            <?php if (strpos($statusMsg, 'successfully') !== false) { ?>
                                                <div class="alert alert-success" role="alert">
                                                    <?php echo $statusMsg; ?>
                                                </div>
                                            <?php } else { ?>
                                                <div class="alert alert-danger" role="alert">
                                                    <?php echo $statusMsg; ?>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main><!-- End #main -->
</body>

</html>