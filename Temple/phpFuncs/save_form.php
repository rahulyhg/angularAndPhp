<?php
/**
 * Created by PhpStorm.
 * User: Nataraj
 * Date: 03-08-2018
 * Time: 06:21 AM
 */

$target_dir = "data/";
$name = $_POST['name'];
//print_r($_FILES);
$target_file = $target_dir . basename($_FILES["file"]["name"]);

move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

//write code for saving to database
//include_once "db.php";

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
echo json_encode($_FILES["file"]);
//$sql = "INSERT INTO MyData (name,filename) VALUES ('" . $name . "','" . basename($_FILES["file"]["name"]) . "')";

//if (mysqli_query($conn, $sql) === TRUE) {
//    echo json_encode($_FILES["file"]); // new file uploaded
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}
//
//$conn->close();

?>