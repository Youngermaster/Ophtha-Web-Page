<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../assets/images/Logos/Ophta-logo-75x75-transparent.png" type="image/x-icon">
    
    <link rel="stylesheet" href="../css/register.css">
    <title>Company profile</title>
</head>
<body>

<script src="../js/save_cookie.js"></script>
    
  <br><br>
    
    <div class="registers">
      <center>
      <table>
          
  <?php
    $clicked_register = $_COOKIE["headvalue"];
    $conn = mysqli_connect("localhost", "root", "", "ophtha");
    // Check connection
    if ($conn->connect_error)
        die("Connection failed: " . $conn->connect_error);
         
    $sql = "SELECT * FROM empresa WHERE codigo = $clicked_register";
    $result = $conn->query($sql);
    
    // output data of each row
    $row = mysqli_fetch_row($result);

    echo "<tr><td><th>Code</th><th>" . utf8_encode($row[0]) . "</th></td></tr>";
    echo "<tr><td><th>Name</th> <th>" . utf8_encode($row[1]) . "</th></td></tr>";
    echo "<tr><td><th>Attendant</th> <th>" . utf8_encode($row[2]) . "</th></td></tr>";
    echo "<tr><td><th>Phone</th> <th>" . utf8_encode($row[3]) . "</th></td></tr>";
    echo "<tr><td><th>Address</th> <th>" . utf8_encode($row[4]) . "</th></td></tr>";
    echo "<tr><td><th>City</th> <th>" . utf8_encode($row[5]) . "</th></td></tr>";
    echo "<tr><td><th>Region</th> <th>" . utf8_encode($row[6]) . "</th></td></tr>";
    echo "<tr><td><th>Country</th> <th>" . utf8_encode($row[7]) . "</th></td></tr>";
    echo "<tr><td><th>Sale days</th> <th>" . utf8_encode($row[8]) . "</th></td></tr>";
    echo "<tr><td><th>Schedule</th> <th>" . utf8_encode($row[9]) . "</th></td></tr>";
    echo "<tr><td><th>Amount of calls</th> <th>" . utf8_encode($row[10]) . "</th></td></tr>";
    echo "<tr><td><th>Accumulated</th> <th>" . utf8_encode($row[11]) . "</th></td></tr>";
    $conn->close();
  ?>
  </table>
  </center>
    </div>
</body>
</html>