<?php
        $call_id = $_POST['callId'];
        $code = $_POST['code'];
        $id_type = $_POST['idType'];
        $id = $_POST['id'];
        $status = $_POST['status'];
        $call_date = $_POST['callDate'];
        $hour = $_POST['hour'];
        $comment = $_POST['comment'];
        
        try {
            $base = new PDO('mysql:host=localhost; dbname=ophtha', 'root', '');
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $base->exec("SET CHARACTER SET utf8");
    
            $sql_sentence = "INSERT INTO llamada (idLlamada, codigo, tipo_id, id, estado, fecha, hora, comentario)
            VALUES (:callId, :code, :idType, :id, :status, :callDate, :hour, :comment)";
            
            $result = $base->prepare($sql_sentence);

            $result->execute(array(
                ":callId"=>$call_id, ":code"=>$code, ":idType"=>$id_type, ":id"=>$id,
                ":status"=>$status, ":callDate"=>$call_date, ":hour"=>$hour, ":comment"=>$comment
            ));

            $result->closeCursor();
            header("location: calls.php");

        } catch (Exception $e) {
            // die('Error: ' . $e->GetMessage());
            echo "Error line: " . $e->getLine();
        } finally {
            $base = null;
        }
?>