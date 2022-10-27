<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "foodDB";

$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}
    echo "Connection sucessful";
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $food = $_POST['food'];
    if(empty($food)){
        echo "Food is empty";
    }
    else {
        echo $_POST['food'];
    }
    echo $_POST['food'];
    echo $_POST['name'];

   // $price = $_POST['Price'];
}


?>
