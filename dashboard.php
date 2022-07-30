<?php
$username = $_POST["username"];
$password = $_POST["password"];

$login = "$username,$password\n";
file_put_contents("userinfo.txt", $login, FILE_APPEND);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>estate. | dashboard</title>
    <link rel="stylesheet" href="main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@300;400;600;700;800&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- nav bar with dashboard after user signs in -->
    <div class="dashboardnavigation-bar">
      <div id="dashboardnavigation-container">
        <img id="logo" src="images/logo.png" />
        <div id="logoType">estate.</div>
        <ul>
          <li><a href="main.html">Home</a></li>
          <li><a href="dashboard.html">Dashboard</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <div id="logoutlink"><a href="signin.php">Log Out</a></div>
        <div id="wishlistlink">Wish List</div>
        <img id="wishlistIcon" src="images/heartIcon.png" alt="heartIcon" />
      </div>
    </div>

    <div id="welcomeMessage">
      Welcome
      <!-- change name to user's name -->
      <span id="welcomeSpan"> Jessica</span>
      !
    </div>

    <div id="subwelcomeMessage">
      Thank you for choosing us to assist you in finding the perfect
      <br />
      home for you.
    </div>

    <div class="container">
      <form action="#" method="GET" class="form">
        <input
          type="search"
          placeholder="Enter an address, neighborhood, city, or ZIP code"
          class="search-field"
        />
        <button type="submit" class="search-button">
          <img src="images/searchiconSmall.png" />
        </button>
      </form>
    </div>

    <div id="listings">
      <!-- change to search results -->
      <div id="areaResults">Hampton GA Real Estate & Homes For Sale</div>
      <!-- change to search results amount -->
      <div id="numberResults">182 Listings</div>

      <form action="">
        <select name="select" id="select">
          <option value="homesForYou">Sort: Homes for You</option>
          <option value="price-high-low">Sort: Price (High to Low)</option>
          <option value="price-low-high">Sort: Price (Low to High)</option>
          <option value="homesForYou">Sort: Newest</option>
          <option value="homesForYou">Sort: Bedrooms</option>
          <option value="homesForYou">Sort: Bathrooms</option>
          <option value="homesForYou">Sort: Square Feet</option>
        </select>
      </form>
    </div>
  </body>
</html>