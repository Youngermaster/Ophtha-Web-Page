<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../assets/images/Logos/Ophta-logo-75x75-transparent.png" type="image/x-icon">

    <link rel="stylesheet" href="../css/register.css">
    <title>Call profile</title>
</head>
<body>

    <script src="../js/save_cookie.js"></script>
    
  <br><br>
    
    <div class="call">
      <center>
      <table>
          
  <?php
  $clicked_register = $_COOKIE["headvalue"];
    $conn = mysqli_connect("localhost", "root", "", "ophtha");
    // Check connection
    if ($conn->connect_error)
        die("Connection failed: " . $conn->connect_error);
         
    $sql = "SELECT * FROM llamada WHERE idLlamada = $clicked_register";
    $result = $conn->query($sql);
    
    // output data of each row
    $row = mysqli_fetch_row($result);

    echo "<tr><td><th>Call Id</th><th>" . utf8_encode($row[0]) . "</th></td></tr>";
    echo "<tr><td><th>Code</th> <th>" . utf8_encode($row[1]) . "</th></td></tr>";
    echo "<tr><td><th>Type Id</th> <th>" . utf8_encode($row[2]) . "</th></td></tr>";
    echo "<tr><td><th>Id</th> <th>" . utf8_encode($row[3]) . "</th></td></tr>";
    echo "<tr><td><th>Status</th> <th>" . utf8_encode($row[4]) . "</th></td></tr>";
    echo "<tr><td><th>Call date</th> <th>" . utf8_encode($row[5]) . "</th></td></tr>";
    echo "<tr><td><th>Hour</th> <th>" . utf8_encode($row[6]) . "</th></td></tr>";
    echo "<tr><td><th>Comment</th> <th>" . utf8_encode($row[7]) . "</th></td></tr>";
    $conn->close();
  ?>
  </table>
  </center>
    </div>
</body>
</html>