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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $food = $_POST['food'];
    if (empty($food)) {
        echo "Food is empty";
    } else {
        echo $_POST['food'];
    }
    echo $_POST['food'];
    echo $_POST['name'];

    // $price = $_POST['Price'];
    $sql = "SELECT Street_address from FOOD where Food_type = '" . $food . "'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "Address: " . $row["Street_address"] . "<br>";
        }
    } else {
        echo "0 results";
    }
}
