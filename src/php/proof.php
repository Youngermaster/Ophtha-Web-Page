<?php
        $db_host = "localhost";
        $db_name = "ophtha";
        $db_user = "root";
        $db_password = "";

        $conection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

        // $query = "SELECT * FROM clientes WHERE POBLACIÓN LIKE '%{$_POST['nombre']}%'";

        $query = "SELECT * FROM paciente";
        
        $result = mysqli_query($conection, $query);

        while ($row = mysqli_fetch_row($result)) {
            echo $row[0] . " ";
            echo $row[1] . " ";
            echo $row[2] . " ";
            echo $row[3] . " ";
            echo $row[4] . " ";
            echo $row[5] . " ";
            echo nl2br ("\n");
        }

        
        while ($row = mysqli_fetch_row($result)) {
            echo $row[0] . " ";
            echo $row[1] . " ";
            echo $row[2] . " ";
            echo $row[3] . " ";
            echo $row[4] . " ";
            echo $row[5] . " ";
            echo $row[6] . " ";
            echo $row[7] . " ";
            echo $row[8] . " ";
            echo $row[9] . " ";
            echo $row[10] . " ";
            echo $row[11] . " ";
            echo $row[12] . " ";
            echo nl2br ("\n");
        }

        
            
        mysqli_close($conection);

    ?>