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

    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/register.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>Ophtha | Registers</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light bg-dark sticky-top">
          <div class="container-fluid">
              <a class="navbar-brand" href="index.html"><img src="../assets/images/Logos/Ophta-logo-75x75-transparent.png"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                  <span class="navbar-toggler-icon"></span>
              </button>
              
              <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                          <a style="text-decoration:none" class="nav-link-personalized" href="../html/index.html">Home</a>
                      </li>
                      <li class="nav-item">
                          <a style="text-decoration:none" class="nav-link-personalized" href="calls.php">Calls</a>
                      </li>
                      <li class="nav-item">
                          <a  style="text-decoration:none"class="nav-link-personalized" href="registers.php">Registers</a>
                      </li>
                      <li class="nav-item">
                          <a  style="text-decoration:none"class="nav-link-personalized" href="patient.php">Patient</a>
                      </li>
                      <li class="nav-item">
                          <a  style="text-decoration:none" class="nav-link-personalized" href="login.php">Exit</a>
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
      <div class="container">
        <div class="create-and-search">
            <form class="form-inline my-2 my-lg-0">
            <p>
                <a class="btn btn-lg btn-primary my-2 mr-2 my-lg-0" href="/docs/4.3/components/navbar/" role="button">Add a register</a>
                <input id="search-text" class="form-control mr-sm-2 my-2 ml-2 my-lg-0" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0 my-lg-0" type="submit" id="search-button">Search</button>
            </p>
            </form>
        </div>
      </div>
      <br><br>
  <div class="registers">
    <center>
    <table>
        <tr>
            <th>Code</th> 
            <th>Name</th>
            <th>Phone</th>
            <th>Delete</th>
        </tr>
        
<?php
$conn = mysqli_connect("localhost", "root", "", "ophtha");
// Check connection
if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);
  
  $sql = "SELECT * FROM empresa";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = mysqli_fetch_row($result)) {
        echo "<tr><td> <a href=\"company_full_profile.php\" target=\"_blank\" id =\"" . utf8_encode($row[0]) . "\" onclick=\"reply_click(this.id)\">"
        . utf8_encode($row[0]) . " </a> </td><td> " . utf8_encode($row[1]) . " </td><td> " . utf8_encode($row[3]) .
        " </td><td> <button class=\"btn btn-secondary my-2\" type=\"submit\">Delete</button> </td></tr>";
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
    <h6>&copy 2019 | All rights reserved.</h6>
  </footer>

  <script src="../js/toogle.js"></script>   
  <script src="../js/registers.js"></script>
</body>
</html>