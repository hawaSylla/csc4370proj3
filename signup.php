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
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="left">
      <img src="images/signupImage.png" alt="signinImage" />
    </div>
    <div class="right">
      <div id="welcomeSignup">Welcome!</div>
      <div id="sub-welcomeSignup">Let's get started.</div>

      <div>
        <!-- <form action="proc-sign.php" method="post"> -->
        <form action="dashboard.php" method="post">
          <input
            class="formfieldsSignup"
            type="text"
            name="firstname"
            id="firstname"
            placeholder="First Name"
            required
          />
          <br />
          <input
            class="formfieldsSignup"
            type="text"
            name="lastname"
            id="lastname"
            placeholder="Last Name"
            required
          />
          <br />
          <input
            class="formfieldsSignup"
            type="text"
            name="username"
            id="username"
            placeholder="Username"
            required
          />
          <input
            class="formfieldsSignup"
            type="text"
            name="email"
            id="emailSignup"
            placeholder="Email"
            required
          />
          <input
            class="formfieldsSignup"
            type="password"
            name="password"
            id="password"
            placeholder="Password"
            required
          />
          <input
            class="formfieldsSignup"
            type ="password"
            name="confirmPassword"
            id="confirmPassword"
            placeholder="Confirm Password"
            required
          />
          <br />
          <input
            type="checkbox"
            name="terms"
            id="terms"
            onchange="activateButton(this)"
          />

          I accept the Terms of Use & Privacy Policy

          <br />

          <input class="signupbutton" type="submit" value="Sign Up" />
        </form>
      </div>

      <p id="orSpanp-signup"><span id="orSpan-signup">or</span></p>

      <button id="googleSignup">
        <img id="googleLogo" src="images/google.png" alt="google" />
        Sign Up with Google
      </button>

      <p id="signupP">
        Already have an account?
        <a href="signin.php">
          <span id="signupSpan">Sign in</span>
        </a>
      </p>
    </div>
  </body>
</html>
