<script src="../js/save_cookie.js"></script>
<?php
   
    $clicked_register = $_COOKIE["headvalue"];
    $conn = mysqli_connect("localhost", "root", "", "ophtha");
    // Check connection
    if ($conn->connect_error)
        die("Connection failed: " . $conn->connect_error);
         
   $sql = "DELETE FROM Companies WHERE code = $clicked_register";
   
   $result = $conn->query($sql);
   $conn->close();
   header("location: registers.php");
?>