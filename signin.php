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
      <img src="images/signInImage.png" alt="signinImage" />
    </div>
    <div class="right">
      <div id="welcome">Welcome back!</div>
      <div id="sub-welcome">Please enter your credentials</div>

      <div>
        <form action="dashboard.php">
          <input
            class="formfields"
            type="text"
            name="email"
            id="email"
            placeholder="Email"
            required
          />
          <br />
          <input
            class="formfields"
            type="text"
            name="password"
            id="password"
            placeholder="Password"
            required
          />
          <br />
          <a id="forgotPassword" href="#"> Forgot Password?</a>
          <br />
          <input class="button" type="submit" value="Login" />
        </form>
      </div>

      <p id="orSpanp"><span id="orSpan">or</span></p>

      <button>
        <img id="googleLogo" src="images/google.png" alt="google" />
        Login with Google
      </button>

      <p id="signupP">
        Don't have an account?
        <a href="signup.html">
          <span id="signupSpan">Sign up</span>
        </a>
      </p>
    </div>
  </body>
</html>