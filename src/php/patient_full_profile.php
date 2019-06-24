<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../assets/images/Logos/Ophta-logo-75x75-transparent.png" type="image/x-icon">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,800">
    <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/register.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>Perfil del paciente</title>
</head>
<body>

    <script src="../js/save_cookie.js"></script>
  <br><br>
    
    <div class="patient">
      <center>
      <table>
          
  <?php
    $clicked_register = $_COOKIE["headvalue"];
    $conn = mysqli_connect("localhost", "root", "", "ophtha");
    // Check connection
    if ($conn->connect_error)
      die("Connection failed: " . $conn->connect_error);
         
    $sql = "SELECT * FROM Patients WHERE id = $clicked_register";
    $result = $conn->query($sql);
    
    // output data of each row
    $row = mysqli_fetch_row($result);

    echo "<tr><th>Tipo de ID</th> <th>" . utf8_encode($row[0]) . "</th></tr>";
    echo "<tr><th>ID del paciente</th><th>" . utf8_encode($row[1]) . "</th></tr>";
    echo "<tr><th>Nombre</th> <th>" . utf8_encode($row[2]) . "</th></tr>";
    echo "<tr><th>Teléfono</th> <th>" . utf8_encode($row[3]) . "</th></tr>";
    echo "<tr><th>Dirección</th> <th>" . utf8_encode($row[4]) . "</th></tr>";
    echo "<tr><th>Interesés</th> <th>" . utf8_encode($row[5]) . "</th></tr>";
    echo "<tr><th>Número de celular</th> <th>" . utf8_encode($row[6]) . "</th></tr>";
    $conn->close();
  ?>
  </table>
  </center>
    </div>
</body>
</html>