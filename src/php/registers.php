<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../assets/images/Logos/Ophta-logo-75x75-transparent.png" type="image/x-icon">
    
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,800">
    <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link type="text/css" rel="stylesheet" href="../css/index.css" >
    <link type="text/css" rel="stylesheet" href="../css/register.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>Droguerías | Ophtha</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light bg-dark sticky-top">
          <div class="container-fluid">
              <a class="navbar-brand" href="../html/home.html"><img src="../assets/images/Logos/Ophta-logo-75x75-transparent.png"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                  <span class="navbar-toggler-icon"></span>
              </button>
              
              <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                          <a style="text-decoration:none" class="nav-link-personalized" href="../html/home.html">Inicio</a>
                      </li>
                      <li class="nav-item">
                          <a style="text-decoration:none" class="nav-link-personalized" href="calls.php">Llamadas</a>
                      </li>
                      <li class="nav-item">
                          <a style="text-decoration:none"class="nav-link-personalized" href="registers.php">Droguerías</a>
                      </li>
                      <li class="nav-item">
                          <a style="text-decoration:none"class="nav-link-personalized" href="patient.php">Pacientes</a>
                      </li>
                      <li class="nav-item">
                          <a style="text-decoration:none" class="nav-link-personalized" href="../../index.php">Salir</a>
                      </li>
                      <li class="nav-item">
                          <div class="toggle-container">
                              <input class="input-toggle" type="checkbox" id="switch" name="theme"/><label class="mega-toggle" for="switch">Toggle</label>
                          </div>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>
    </div>
      <br>
      <br>
      <div class="container">
            <form class="form-inline my-2 my-lg-0" action="search_registers.php" method="get">
                <p>
                    <a class="btn btn-outline-primary my-2 mr-2 my-lg-0 " href="new_register_form.php" role="button">Añadir una droguería</a>
                    <input name="search" class="form-control " type="text" placeholder="Buscar">
                    <input role="button" class="btn btn-outline-primary" type="submit" name="sending" value="Buscar">
                </p>
            </form>
      </div>
      <br><br>
  <div class="registers">
    <center>
    <table>
        <tr>
            <th>Código</th> 
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
        </tr>
        
<?php
$conn = mysqli_connect("localhost", "root", "", "ophtha");
// Check connection
if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);
  
  $sql = "SELECT * FROM Companies";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = mysqli_fetch_row($result)) {
        echo "<tr><td> <a class=\"btn btn-primary my-2\" href=\"company_full_profile.php\" target=\"_blank\" id =\"" . utf8_encode($row[0]) . 
        "\" onclick=\"reply_click(this.id)\">" . utf8_encode($row[0]) . " </a> </td><td> " . 
        utf8_encode($row[1]) . " </td><td> " . utf8_encode($row[3]) . " </td><td>
        <a class=\"btn btn-outline-primary my-2\" href=\"delete_register.php\" id =\"" . 
        utf8_encode($row[0]) . "\" onclick=\"reply_click(this.id)\" role=\"button\"> Actualizar </a> </td>
        </td><td> 
        <a class=\"btn btn-outline-danger my-2\" href=\"delete_register.php\" id =\"" . 
        utf8_encode($row[0]) . "\" onclick=\"reply_click(this.id)\" role=\"button\"> Eliminar </a> </td>
        </tr>";
      }
  } 
  else 
    echo "0 results";
$conn->close();
?>
</table>
</center>
  </div>
  <br><br>
  <footer>
    <h6>&copy 2019 | Todos los derechos reservados.</h6>
  </footer>

  <script src="../js/toogle.js"></script>   
  <script src="../js/save_cookie.js"></script>
</body>
</html>