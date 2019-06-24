<?php
    $id_type = $_POST['idType'];
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $interest = $_POST['interest'];
    $mobile_number = $_POST['mobileNumber'];

    try {
        $base = new PDO('mysql:host=localhost; dbname=ophtha', 'root', '');
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET utf8");

        $sql_sentence = "INSERT INTO Patients (idType, id, name, phone, address, interest, mobileNumber)
        VALUES (:idType, :id, :name, :phone, :address, :interest, :mobileNumber)";
        
        $result = $base->prepare($sql_sentence);

        $result->execute(array(
            ":idType"=>$id_type, ":id"=>$id, ":name"=>$name, ":phone"=>$phone, ":address"=>$address,
            ":interest"=>$interest, ":mobileNumber"=>$mobile_number
        ));

        $result->closeCursor();
        header("location: patient.php");

    } catch (Exception $e) {
        echo ('Error: ' . $e->GetMessage());
        echo "Error line: " . $e->getLine();
    } finally {
        $base = null;
    }
?>