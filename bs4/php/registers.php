<?php
    $conn = mysqli_connect("localhost", "root", "", "ophtha");
    // Check connection
    if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
    } 
    $sql = "SELECT * FROM empresa";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
      echo "<tr><td>" . $row["Code"]. "</td><td>" . $row["NIT"] . "</td><td>"
      . $row["Name"]. "</td></tr>" . $row["interes"]. "</td></tr>";
  }


  echo "</table>";
  } else { echo "0 results"; }
  $conn->close();
?>

<th>Code</th> 
            <th>NIT</th> 
            <th>Name</th>
            <th>On charge</th>
            <th>Phone</th>
            <th>Address</th>
            <th>City</th>
            <th>State*</th>
            <th>Country</th>
            <th>Sale days</th>
            <th>Schedule</th>
            <th>Calls number</th>
            <th>Accumulate</th>