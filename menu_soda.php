<!-- Select data from database -->
<?php
include_once 'db_connect.php';

$sql = "SELECT item_id, names, types, prices, abouts, images
        FROM list_menu
        WHERE types = 'soda'";
$result = $conn->query($sql);

// Check query
if (!$result) {
    die("We can't query : " . mysqli_error($conn));
}

//loop data
while ($soda = $result->fetch_assoc()) {
?>
    <form name="myFrom" action="con_order.php" method="POST" target="iframe_target">
    <iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
        <div class="container">
            <div class="card">
                <div class="row">
                    <div style="display: flex">
                        <div class="col-5">
                            <img src="upload_imgs/<?php echo $soda["images"] ?>" class="img-fluid rounded-start" width="200">
                        </div>
                        <div class="card-body col-7">
                            <h5 class="fw-bold"><?php echo $soda["names"] ?></h5>
                            <p class="about" style="font-size: 11px"><?php echo $soda["abouts"] ?></p>
                            <p class="prices fw-bold float-end fs-4"><?php echo $soda["prices"] . " " . "฿" ?></p>
                        </div>
                    </div>
                </div>
                <button type="submit" name="id_list" value="<?= $soda["item_id"] ?>" 
                        class="button-table btn btn-warning text-white">
                        ORDER NOW
                </button>
            </div>
        </div>
    </form>
<?php
}
?>