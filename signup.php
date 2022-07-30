<?php

@include 'config.php';

if (isset($_POST['submit'])) {

  $fname = mysqli_real_escape_string($conn, $_POST['firstname']);
  $lname = mysqli_real_escape_string($conn, $_POST['lastname']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $pass = md5($_POST['password']);
  $cpass = md5($_POST['confirmPassword']);

  $select - "SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

  $result = mysqli_query($conn, $select);

  if (mysqli_num_rows($result) > 0) {
    $error[] = 'user already exists';

    
  }else{
    if($pass != $cpass){
      $error[] = 'password not match';

    }
    else{
      $insert = "INSERT INTO user_form(name,email,password) VALUES('$name','$email','$pass')";
      mysqli_query($conn,$insert);
      header('location:signin.php');
    }
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>estate.| Sign In</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
</head>

<body>
  <div class="left">
    <img src="images/signupImage.png" alt="signinImage" />
  </div>
  <div class="right">
    <div id="welcomeSignup">Welcome!</div>
    <div id="sub-welcomeSignup">Let's get started.</div>

    <div>
      <form action="dashboard.php" method="post">

        <?php
        if (isset($error)) {
          foreach ($error as $error) {
            echo ' <span class ="error-msg">' . $error . '</span>';
          }
        }

        ?>
        <input class="formfieldsSignup" type="text" name="firstname" id="firstname" placeholder="First Name" required />
        <br />
        <input class="formfieldsSignup" type="text" name="lastname" id="lastname" placeholder="Last Name" required />
        <br />
        <input class="formfieldsSignup" type="text" name="username" id="username" placeholder="Username" required />
        <input class="formfieldsSignup" type="text" name="email" id="emailSignup" placeholder="Email" required />
        <input class="formfieldsSignup" type="password" name="password" id="password" placeholder="Password" required />
        <input class="formfieldsSignup" type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" required />
        <br />
        <input type="checkbox" name="terms" id="terms" onchange="activateButton(this)" />

        I accept the Terms of Use & Privacy Policy

        <br />

        <input class="signupbutton" name="submit " type="submit" value="Sign Up" />
      </form>
    </div>

    <p id="orSpanp-signup"><span id="orSpan-signup">or</span></p>

    <button id="googleSignup">
      <img id="googleLogo" src="images/google.png" alt="google" />
      Sign Up with Google
    </button>

    <p id="signupP">
      Already have an account?
      <a href="signin.html">
        <span id="signupSpan">Sign in</span>
      </a>
    </p>
  </div>
</body>

</html>