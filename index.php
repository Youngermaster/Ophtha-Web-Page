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
        
          <!-- This is the Toggle who changes from light to dark -->
          <div class="toggle-container">
            <input class="input-toggle" type="checkbox" id="switch" name="theme"/><label class="mega-toggle" for="switch">Toggle</label>
          </div>
          
          <h1>Ingresa aquí</h1>
          <form action="src/html/home.html" method="post">
            <!-- USERNAME INPUT -->
            <label for="user_name">Usuario</label>
            <input type="text" placeholder="Escribe tu usuario" name="username">
            <!-- PASSWORD INPUT -->
            <label for="user_password">Constraseña</label>
            <input type="password" placeholder="Escribe tu contraseña" name="password">
            <button name="send" type="submit" value="login">Ingresar</button>
          </form>
      </div>
      
    </div>
    <script src="src/js/toogle.js"></script>
  </body>
</html>