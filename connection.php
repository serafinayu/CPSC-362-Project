<?php
$con = mysqli_connect('localhost', 'root', '',’food_db’);
if ($con->connect_error) {
    die("Connection failled: " . $con->connect_error);

}
    echo "Connection sucessful";

$foodType = $_POST['foodType'];
$pricePoint = $_POST['pricePoint'];

?>
