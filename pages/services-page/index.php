<!-- fundamentals.php -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>NutriHealth</title>

  <!-- Roboto Google Font Link -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Funnel+Sans:ital,wght@0,300..800;1,300..800&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />

  <!-- Google Font Icons Link-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

  <!-- CSS -->
  <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
  <header>
    <nav>
      <div class="nav-brand">
        <a href="../../../../index.php" title="NutriHealth Logo"><img class="brand-logo"
            src="../../../../assets/img/nutrihealth-logo.png" height="40px" alt="NutriHealth Logo" /></a>
        <a class="brand-name" href="../../../../index.php" title="Brand Name">NutriHealth</a>
      </div>
      <div class="toggle-menu">
        <button id="toggleMenuBtn" class="toggle-menu-btn" onclick="toggleMenu()" title="Show Menu">
          <span id="toggleIcon" class="material-icons"> menu </span>
        </button>
      </div>
      <div>
        <ul id="navbarLinks" class="navbar-links">
          <li>
            <a href="../../../../index.php" title="View Homepage">Home</a>
          </li>
          <li><a class="active-link" href="index.php" title="View Services">Services</a></li>
          <li><a href="" title="View About Information">About</a></li>
          <li><a href="" title="View Contact Information">Contact</a></li>
          <li>
            <a id="signUpBtnLink" href="" title="Create New Account">Sign Up</a>
          </li>
        </ul>
      </div>
    </nav>

    <main>
      <h1>Services</h1>
      <div class="services-content">
        <div class="calorie-checker card">
          <h2>Calorie Checker</h2>
          <form>
            <label for="calories">Enter calories consumed today:</label><br>
            <input type="number" name="calories" id="calories" required>
            <br><br>
            <input type="submit" value="Check Health Tip">
          </form>
          <?php
          if (1000 < 1500) {
            echo "<p><strong>Tip:</strong> You might need to eat a bit more today.</p>";
          } elseif ($calories <= 2500) {
            echo "<p><strong>Great!</strong> You're within a healthy calorie range.</p>";
          } else {
            echo "<p><strong>Careful!</strong> That’s quite a bit. Consider light exercise.</p>";
          }
          ?>
        </div>
        <div class="sample-meal-plan card">
          <h2>Sample Meal Plan</h2>
          <?php
          $meals = ["Breakfast: Oatmeal", "Snack: Banana", "Lunch: Grilled Chicken", "Snack: Nuts", "Dinner: Steamed Veggies"];
          echo "<ul>";
          foreach ($meals as $meal) {
            echo "<li>$meal</li>";
          }
          echo "</ul>";
          ?>
        </div>
      </div>
    </main>
  </header>
  <footer>
    <p>&copy; <?php echo date("Y"); ?> NutriHealth. All rights reserved.</p>
  </footer>

  <script src="./assets/js/script.js"></script>
</body>

</html>