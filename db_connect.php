<?php 
//Database configuration.
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "pos_coffee";

//Create database connection.
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

//Check error connection.
if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}
echo "Connected successfully <br>";

//sql to create table
// $sql = "CREATE TABLE list_menu (
// item_id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// names VARCHAR(100) NOT NULL,
// types VARCHAR(100) NOT NULL,
// prices VARCHAR(100) NOT NULL,
// abouts VARCHAR(255) NOT NULL,
// images VARCHAR(255) NOT NULL
// )ENGINE=INNODB DEFAULT CHARSET=utf8";

// if ($conn->query($sql) === TRUE) {
//     echo "Table menu create succesfully";
// }else {
//     echo "Error creating table" . $conn->error;
// };

?>