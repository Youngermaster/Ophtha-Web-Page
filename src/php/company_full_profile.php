<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../assets/images/Logos/Ophta-logo-75x75-transparent.png" type="image/x-icon">
    
    <link rel="stylesheet" href="../css/register.css">
    <title>Perfil de Droguería | Ophtha</title>
</head>
<body>

<script src="../js/save_cookie.js"></script>
    
  <br><br>
    
    <div>
      <center>
      <table>
          
  <?php
     $clicked_register = $_COOKIE["headvalue"];
     $conn = mysqli_connect("localhost", "root", "", "ophtha");
     // Check connection
     if ($conn->connect_error)
         die("Connection failed: " . $conn->connect_error);
          
    $sql = "SELECT * FROM Companies WHERE code = $clicked_register";
    
    $result = $conn->query($sql);
    
    // output data of each row
    $row = mysqli_fetch_row($result);
    
    echo "<tr><th>Código</th><th>" . utf8_encode($row[0]) . "</th></tr>";
    echo "<tr><th>Nombre</th> <th>" . utf8_encode($row[1]) . "</th></tr>";
    echo "<tr><th>A cargo</th> <th>" . utf8_encode($row[2]) . "</th></tr>";
    echo "<tr><th>Teléfono</th> <th>" . utf8_encode($row[3]) . "</th></tr>";
    echo "<tr><th>Dirección</th> <th>" . utf8_encode($row[4]) . "</th></tr>";
    echo "<tr><th>Ciudad</th> <th>" . utf8_encode($row[5]) . "</th></tr>";
    echo "<tr><th>Región</th> <th>" . utf8_encode($row[6]) . "</th></tr>";
    echo "<tr><th>País</th> <th>" . utf8_encode($row[7]) . "</th></tr>";
    echo "<tr><th>Días de venta</th> <th>" . utf8_encode($row[8]) . "</th></tr>";
    echo "<tr><th>Horario</th> <th>" . utf8_encode($row[9]) . "</th></tr>";
    echo "<tr><th>Cantidad de llamadas</th> <th>" . utf8_encode($row[10]) . "</th></tr>";
    echo "<tr><th>Acumulado</th> <th>" . utf8_encode($row[11]) . "</th></tr>";
    $conn->close();
  ?>
  </table>
  </center>
    </div>
</body>
</html>