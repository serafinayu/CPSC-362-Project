<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Food 4 Thought</title>
  <link href="all-styles.css" rel="stylesheet" />
  <!-- v The stylesheet for the font we are using throughout this project v-->
  <link href="https://fonts.googleapis.com/css?family=Outfit" rel="stylesheet" />
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/8749a0f96d.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
  <!-- Bootstrap: 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    -->
</head>

<body>
  <!-- Header -->
  <header class="header">
    <h1>Food 4 Thought</h1>
  </header>

  <div class="food-results">
    <div class="results-text">
      <h1>Food Results:</h1>
    </div>
    <div class="stats">
      <h2 class="restaurant">Restaurant:</h2>
      <h2 class="specialties">Food Specialties:</h2>
      <h2 class="price">Price Points:</h2>
      <h2 class="location">Address:</h2>
    </div>
  </div>

  <div class="container">
    <a href="home-screen.html">
      <button class="search-again" type="menu">Search Again</button>
    </a>
  </div>

  <!-- Bottom Border and Credits
            - add text including class, professor, and school 
    -->
  <footer>
    <div class="credits">
      <address>
        Written by Quoc Le, Sebastian Saucedo, and Serafina Yu
        <a href="https://github.com/serafinayu/CPSC-362-Project" target="_blank">
          <i class="icon fa-brands fa-github"></i>
        </a>
      </address>
    </div>
  </footer>
</body>

</html>

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
  $price = $_POST['price'];

  if (empty($food)) {
    echo "Food is empty";
  } else {
    echo $_POST['food'];
  }
  echo $_POST['food'];

  $sql = "SELECT Street_address from FOOD where Food_type='" . $food;
  $sql .= "' and price='" . $price . "'";

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

?>