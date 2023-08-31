<?php
session_start();
include_once 'db_connect.php';

echo "<pre>";
print_r($_POST,);
print_r($_FILES);
echo "</pre>";

$name   = $_POST["name"];
$type   = $_POST["type"];
$prices = $_POST["prices"];
$about  = $_POST["about"];

// File upload path
$targetDir = "upload_imgs/";

// เช็คว่ามีไฟล์ที่ถูกเลือกอัปโหลดมาหรือไม่
if (!empty($_FILES["file"]["name"])) {
    // ดึงชื่อไฟล์จากข้อมูลที่ถูกส่งมา
    $imageName = basename($_FILES["file"]["name"]);
    // กำหนดพาธที่ต้องการเก็บไฟล์
    $targetFilePath = $targetDir . $imageName;
    // ดึงนามสกุลของไฟล์ออกมาจากพาธของไฟล์
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // กำหนดรายชื่อนามสกุลไฟล์ที่อนุญาตให้อัปโหลด
    $allowTypes = array('jpg', 'png', 'jpeg');
    // เช็คว่านามสกุลของไฟล์ที่อัปโหลดอยู่ในรายชื่อที่อนุญาตหรือไม่
    if (in_array($fileType, $allowTypes)) {
        // ถ้าอยู่ในรายชื่อที่อนุญาต

        // ย้ายไฟล์จากตำแหน่งชั่วคราวไปยังตำแหน่งที่ต้องการเก็บไฟล์
        if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)) {
            // เมื่อย้ายไฟล์สำเร็จ
            // เพิ่มข้อมูลลงในฐานข้อมูล
            $insert = $conn->query("INSERT INTO list_menu (names, types, prices, abouts, images) 
                VALUES ('" . $name . "', '" . $type . "', '" . $prices . "', '" . $about . "', '" . $imageName . "')");

            // ถ้าเพิ่มข้อมูลลงในฐานข้อมูลสำเร็จ
            // กำหนดข้อความสถานะและเปลี่ยนเส้นทางไปยังหน้า "add_menu.php"
            if ($insert) {
                $_SESSION['statusMsg'] = "Your menu has been uploaded successfully.";
                header("location: add_menu.php");
            } else {
                // ถ้าเพิ่มข้อมูลลงในฐานข้อมูลไม่สำเร็จ
                // กำหนดข้อความสถานะและเปลี่ยนเส้นทางไปยังหน้า "add_menu.php"
                $_SESSION['statusMsg'] = "Your upload failed, please try again. Error: " . $conn->error;
                header("location: add_menu.php");
            }
        } else {
            // ถ้าเกิดข้อผิดพลาดในขั้นตอนการย้ายไฟล์
            // กำหนดข้อความสถานะและเปลี่ยนเส้นทางไปยังหน้า "index.php"
            $_SESSION['statusMsg'] = "Sorry, there was an error uploading your picture file.";
            header("location: add_menu.php");
        }
    } else {
        // ถ้านามสกุลของไฟล์ไม่อยู่ในรายชื่อที่อนุญาต
        // กำหนดข้อความสถานะและเปลี่ยนเส้นทางไปยังหน้า "index.php"
        $_SESSION['statusMsg'] = "Sorry, only JPG, JPEG and PNG files are allowed to upload.";
        header("location: add_menu.php");
    }
} else {
    // ถ้าไม่มีไฟล์ที่ถูกเลือกอัปโหลดมา
    // กำหนดข้อความสถานะและเปลี่ยนเส้นทางไปยังหน้า "index.php"
    $_SESSION['statusMsg'] = "Please select a file to upload.";
    header("location: add_menu.php");
}
