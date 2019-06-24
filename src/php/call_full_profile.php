<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../assets/images/Logos/Ophta-logo-75x75-transparent.png" type="image/x-icon">

    <link rel="stylesheet" href="../css/register.css">
    <title>Perfil de la llamada | Ophtha</title>
</head>
<body>
  <script src="../js/save_cookie.js"></script>
  <br><br>
      <center>
      <table>
          
  <?php
    $clicked_register = $_COOKIE["headvalue"];
    $conn = mysqli_connect("localhost", "root", "", "ophtha");
    // Check connection
    if ($conn->connect_error)
        die("Connection failed: " . $conn->connect_error);
         
    $sql = "SELECT * FROM Calls WHERE callID = $clicked_register";
    $result = $conn->query($sql);
    
    // output data of each row
    $row = mysqli_fetch_row($result);

    echo "<tr><th>ID de la llamada</th><th>" . utf8_encode($row[0]) . "</th></tr>";
    echo "<tr><th>Código</th> <th>" . utf8_encode($row[1]) . "</th></tr>";
    echo "<tr><th>Tipo de ID</th> <th>" . utf8_encode($row[2]) . "</th></tr>";
    echo "<tr><th>ID</th> <th>" . utf8_encode($row[3]) . "</th></tr>";
    echo "<tr><th>Estado</th> <th>" . utf8_encode($row[4]) . "</th></tr>";
    echo "<tr><th>Fecha de la llamada</th> <th>" . utf8_encode($row[5]) . "</th></tr>";
    echo "<tr><th>Hora de la llamada</th><th>" . utf8_encode($row[6]) . "</th></tr>";
    echo "<tr><th>Comentario</th> <th>" . utf8_encode($row[7]) . "</th></tr>";
    $conn->close();
  ?>
  </table>
  </center>
</body>
</html>