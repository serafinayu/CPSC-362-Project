<php>
  
</php>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Food 4 Thought</title>
  <link href="all-styles.css" rel="stylesheet" />
  <!-- v The stylesheet for the font we are using throughout this project v-->
  <link href="https://fonts.googleapis.com/css2?family=Fredoka" rel="stylesheet" />
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/8749a0f96d.js" crossorigin="anonymous"></script>
  <!-- Bootstrap: 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    -->
</head>

<body>
  <!-- Header -->
  <header class="header">
    <h1>Food 4 Thought</h1>
  </header>

  <!-- Food Icon -->
  <div class="icon">
    <img class="img-responsive" width="200" height="200" src="https://cdn3.iconfinder.com/data/icons/food-294/60/burger__drink__fastfood__juice__glass-512.png" />
  </div>

  <!-- Dropdown Menus:
            - need to implement Javascript and our database so we don't have to hardcode the categories
    -->
  <h3>What are you craving?</h3>
  <div class="dropdown_box">
    <div class="dropdown_options">
      <select name="food" id="food">
        <option value="Pizza">Pizza</option>
        <option value="Noodles">Noodles</option>
        <option value="American">American</option>
        <option value="Mexican">Mexican</option>
        <option value="Thai">Thai</option>
        <option value="Korean">Korean</option>
        <option value="Japanese">Japanese</option>
        <option value="Barbeque">Barbeque</option>
        <option value="Seafood">Seafood</option>
        <option value="Sandwiches">Sandwiches</option>
        <option value="European">European</option>
        <option value="Middle_Eastern">Middle Eastern</option>
      </select>
    </div>
  </div>

  <h3>What is your budget?</h3>
  <div class="dropdown_box">
    <div class="dropdown_options">
      <select name="price" id="Price">
        <option value="Low">$</option>
        <option value="Mid">$$</option>
        <option value="High">$$$</option>
      </select>
    </div>
  </div>

  <br />

  <!-- Submit Button -->
  <div class="container">
    <a href="results-page.html">
      <button class="submit" type="submit">Submit</button>
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