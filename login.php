<!DOCTYPE html>
<html lang="en">
  
  <!-- HEAD SECTION -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Preconnect to Google Fonts for improved performance -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!-- Importing Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Gilda+Display&family=Great+Vibes&family=Lustria&family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

  <!-- jQuery Library -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <!-- bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Link to External Stylesheet -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="stylescss.css">

  <!-- Deferred JavaScript Execution -->
  <script src="login.js" defer></script>

  <!-- Font Awesome Icons with Integrity Check -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Title of the Page -->
  <title>Tanza Oasis Hotel & Resort</title>

  <!-- Favicon for the Browser Tab -->
  <link rel="icon" href="images/logo.png">
    <!-- Header Section -->
    <header>
        <!-- Logo and Site Title -->
        <a href="index.php">
            <h1>
                <img src="images/logo.png" alt="Logo"> Tanza Oasis Hotel & Resort
            </h1>
        </a>
        <!-- Navigation Menu -->
        <nav>
          <ul class="nav-links">
              <li><a href="accommodations.php">Accommodation</a></li>
              <li><a href="dining.php">Dining</a></li>
              <li><a href="events.php">Events</a></li>
              <li><a href="activities.php">Activities</a></li>
              <li><a href="attractions.php">Attraction</a></li>
              <?php
              session_start();
              if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
                  // User is logged in, display settings link
                  echo '<li>                <a href="settings.php">
                  <i class="fa-solid fa-user" style="color: #009e6f;"></i>
                  User
              </a></li>';
              } else {
                  // User is not logged in, display login link
                  echo '<li><a href="login.php">LOGIN</a></li>';
              }
              ?>
          </ul>
      </nav>
    </header>




<section class="user">
    <div class="user_options-container">
      <div class="user_options-text">
        <div class="user_options-unregistered">
          <h2 class="user_unregistered-title">Don't have an account?</h2>
          <!-- <p class="user_unregistered-text">Banjo tote bag bicycle rights, High Life sartorial cray craft beer whatever street art fap.</p> -->
          <button class="user_unregistered-signup" id="signup-button">Sign up</button>
        </div>
  
        <div class="user_options-registered">
          <h2 class="user_registered-title">Have an account?</h2>
          <!-- <p class="user_registered-text">Welcome Back! Log In Now!</p> -->
          <button class="user_registered-login" id="login-button">Login</button>
        </div>
      </div>
      
      <div class="user_options-forms" id="user_options-forms">
        <div class="user_forms-login">
          <h2 class="forms_title">Login</h2>
          <form action="loginn.php" class="forms_form" method="POST">
            <fieldset class="forms_fieldset">
                <div class="forms_field">
                    <input name="email" type="email" placeholder="Email" class="forms_field-input" required autofocus />
                </div>
                <div class="forms_field">
                    <input name="password" type="password" placeholder="Password" class="forms_field-input" required />
                </div>
            </fieldset>
            <div class="forms_buttons">
                <button type="button" class="forms_buttons-forgot">Forgot password?</button>
                <input type="submit" value="Log In" class="forms_buttons-action">
            </div>
        </form>
        
        </div>
        <div class="user_forms-signup">
          <h2 class="forms_title">Sign Up</h2>
          <form action="register.php" class="forms_form" method="POST">
            <fieldset class="forms_fieldset">
              <div class="forms_field">
                <input type="text" placeholder="First Name" class="forms_field-input" name="first_name" required />
              </div>
              <div class="forms_field">
                <input type="text" placeholder="Last Name" class="forms_field-input" name="last_name" required />
              </div>
              <div class="forms_field">
                <input type="email" placeholder="Email" class="forms_field-input" name="email" required />
              </div>
              <div class="forms_field">
                <input type="password" placeholder="Password" class="forms_field-input" name="password" required />
              </div>
            </fieldset>
            <div class="forms_buttons">
              <input type="submit" value="Sign up" class="forms_buttons-action">
            </div>
          </form>
          
        </div>
      </div>
    </div>
  </section>

    <!-- FOOTER SECTION -->
    <footer>
        <!-- Quick Links -->
        <div class="quick-links">
            <a href="our_company.php">Our Company</a>
            <a href="community.php">Community</a>
            <a href="media.php">Media</a>
        </div>

        <!-- Social Links -->
        <div class="social-links">
            <!-- Facebook Icon and Link -->
            <a href="https://fb.com" class="icon" id="facebook" target="_blank">
                <i class="fab fa-facebook fa-bounce" style="color: #750023;"></i>
            </a>
            <!-- Instagram Icon and Link -->
            <a href="https://www.instagram.com" class="icon" id="instagram" target="_blank">
                <i class="fab fa-instagram fa-bounce" style="color: #85002e;"></i>
            </a>
            <!-- Email Icon and Link -->
            <a href="mailto:jhonnalievillaruel@example.com" class="icon" id="email">
                <i class="fad fa-envelope fa-bounce" style="--fa-primary-color: #7a0035; --fa-secondary-color: #f03888;"></i>
            </a>
        </div>

        <!-- Copyright Notice -->
        <p>Built by Jhonna Lie Villaruel © 2024</p>

    </footer>



</body>
</html>