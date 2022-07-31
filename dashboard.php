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
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet" />
</head>

<body>



  <?php
  $username = filter_input(INPUT_POST, "username");
  $password = filter_input(INPUT_POST, "password");
  if (!empty($username)) {
    if (!empty($password)) {
      $host = "localhost";

      $dbname = "proj3";
      // $username = "root";
      // $password = "";
    } else {
      echo "password shouldnt be empty";
      die();
    }
  } else {
    echo "Username shouldn't be empty";
    die();
  }
  // $firstname = $_POST["firstname"];
  // $lastname = $_POST["lastname"];
  // $username = $_POST["username"];
  // $password = $_POST["password"];
  // $email = $_POST["email"];


  ?>


  <!-- nav bar with dashboard after user signs in -->
  <div class="dashboardnavigation-bar">
    <div id="dashboardnavigation-container">
      <img id="logo" src="images/logo.png" />
      <div id="logoType">estate.</div>
      <ul>
        <li><a href="main.php">Home</a></li>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <div id="logoutlink"><a href="signin.php">Log Out</a></div>

      <div id="wishlistlink"><a href="wishlistpg.php">Wish List</a></div>
      <img id="wishlistIcon" src="images/heartIcon.png" alt="heartIcon" />
    </div>
  </div>

  <div class="fade-in-text">
    <div id="welcomeMessage">
      Welcome
      <!-- change name to user's name -->
      <span id="welcomeSpan"> <?= $username ?></span>
      !
    </div>
  </div>

  <div id="subwelcomeMessage">
    <div class="fade-in-text1">
      Thank you for choosing us to assist you in finding the perfect
      <br />
      home for you.
    </div>
  </div>

  <div class="container">
    <form action="#" method="GET" class="form">
      <input type="search" placeholder="Enter an address, neighborhood, city, or ZIP code" class="search-field" />
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

    <ul class="card-wrapper">
      <li class="card">
        <img src='https://images.unsplash.com/photo-1564013799919-ab600027ffc6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8YmVhdXRpZnVsJTIwaG91c2V8ZW58MHx8MHx8&w=1000&q=80' alt=''>
        <h3><a href="">2873 Silverwood Dr, Decatur, GA 3003</a></h3>
        <p>$150000</p>
        <p>3 bed/2 bath</p>
        <p style="font-weight:bold">add to wishlist</p>
      </li>
      <li class="card">
        <img src='https://www.mydomaine.com/thmb/sEVlAsVoifoG-ZLxsnWk0q0ZVrQ=/3409x3409/filters:fill(auto,1)/binary-4--583f06853df78c6f6a9e0b7a.jpeg' alt=''>
        <h3><a href="">21825 Lovington Ct, Hampton, GA 30228</a></h3>
        <p>$250000</p>
        <p>3 bed/2 bath</p>
        <p style="font-weight:bold">add to wishlist</p>
      </li>
      <li class="card">
        <img src='https://images.familyhomeplans.com/cdn-cgi/image/fit=scale-down,quality=85/plans/41438/41438-b580.jpg' alt=''>
        <h3><a href="">Sparceway Dr, Hampton, GA 30228</a></h3>
        <p>$320000</p>
        <p>3 bed/3 bath</p>
        <p style="font-weight:bold">add to wishlist</p>


      </li>
    </ul>


  </div>

  <script>
    let items = [{
        text: "Link 1",
        path: "https://example.com"
      },
      {
        text: "Link 2",
        path: "https://hbo.com"
      },
      {
        text: "Link 3",
        path: "https://cbs.com"
      },
    ];

    const dem = document.getElementById("wl-menu");

    // Loop over the items array
    items.forEach(function(item) {
      // Create a new anchor element and configure it:
      let link = document.createElement("a");
      link.classList.add("listItem");
      link.href = item.path;
      link.textContent = item.text;

      // Append the new link to the menu
      dem.appendChild(link);
    });

    document.querySelector("#wishlist-menu").addEventListener("click", function() {
      dem.classList.toggle("hidden"); // Toggle the display of the menu
    });
  </script>
</body>

</html>