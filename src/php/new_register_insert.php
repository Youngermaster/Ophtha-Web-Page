<?php
        $code = $_POST['code'];
        $name = $_POST['name'];
        $attendant = $_POST['attendant'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $region = $_POST['region'];
        $country = $_POST['country'];
        $sale_days = $_POST['saleDays'];
        $schedule = $_POST['schedule'];
        $amount_of_calls = $_POST['amountOfCalls'];
        $acumulated = $_POST['acumulated'];
        
        try {
            $base = new PDO('mysql:host=localhost; dbname=ophtha', 'root', '');
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $base->exec("SET CHARACTER SET utf8");
    
            $sql_sentence = 
            "INSERT INTO Companies (code, name, encargado, attendant, address, city, region, country, 
                                  saleDays, schedule, amountOfCalls, acumulated)
            VALUES (:code, :name, :attendant, :phone, :address, :city, :region, :country, :saleDays,
                    :schedule, :amountOfCalls, :acumulated)";
            
            $result = $base->prepare($sql_sentence);

            $result->execute(array(
                ":code"=>$code, ":name"=>$name, ":attendant"=>$attendant, ":phone"=>$phone, ":address"=>$address,
                ":city"=>$city, ":region"=>$region, ":country"=>$country, ":saleDays"=>$sale_days, 
                "schedule"=>$schedule, "amountOfCalls"=>$amount_of_calls, "acumulated"=>$acumulated
            ));

            $result->closeCursor();
            header("location: registers.php");

        } catch (Exception $e) {
            echo "Error line: " . $e->getLine() . $e->getMessage();
        } finally {
            $base = null;
        }
?>