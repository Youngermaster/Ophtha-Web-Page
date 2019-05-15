<!DOCTYPE html>
<html lang="en" data-theme="light">
  <head>
    <meta charset="utf-8">
    <title>Ophtha | Log in</title>
    <link rel="stylesheet" href="src/css/login.css">
    <link rel="shortcut icon" href="src/assets/images/Logos/Ophta-logo-75x75-transparent.png" type="image/x-icon">
  </head>
  <body>
    
    <div class="container">
      <div class="login-box">
        <img src="src/assets/images/Logos/logo-Optha.png" class="avatar" alt="Avatar Image">
        
          <!-- This is the Toggle who changes to light to dark -->
          <div class="toggle-container">
            <input class="input-toggle" type="checkbox" id="switch" name="theme"/><label class="mega-toggle" for="switch">Toggle</label>
          </div>
          
          <h1>Log in here</h1>
          <form action="src/html/home.html" method="post">
            <!-- USERNAME INPUT -->
            <label for="user_name">Username</label>
            <input type="text" placeholder="Enter your username" name="username">
            <!-- PASSWORD INPUT -->
            <label for="user_password">Password</label>
            <input type="password" placeholder="Enter your password" name="password">
            <button name="send" type="submit" value="login">Log in</button>
          </form>
      </div>
      
    </div>
    <script src="src/js/toogle.js"></script>
  </body>
</html>