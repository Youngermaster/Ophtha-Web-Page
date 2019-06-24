<?php
    $call_id = $_POST['callId'];
    $code = $_POST['code'];
    $id_type = $_POST['idType'];
    $id = $_POST['id'];
    $status = $_POST['status'];
    $call_date = $_POST['callDate'];
    $hour = $_POST['callHour'];
    $comment = $_POST['comment'];
    
    if ($code = "NULL")
        $code = null;

    if ($id_type = "NULL")
        $id_type = null;

    if ($id = "NULL")
        $id = null;

    if ($comment = "NULL")
        $comment = null;  

    try {
        $base = new PDO('mysql:host=localhost; dbname=ophtha', 'root', '');
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET utf8");

        $sql_sentence = "INSERT INTO Calls (callID, code, idType, id, status, callDate, callHour, comment)
        VALUES (:callId, :code, :idType, :id, :status, :callDate, :callHour, :comment)";    
        
        $result = $base->prepare($sql_sentence);

        $result->execute(array(
            ":callId"=>$call_id, ":code"=>$code, ":idType"=>$id_type, ":id"=>$id,
            ":status"=>$status, ":callDate"=>$call_date, ":callHour"=>$hour, ":comment"=>$comment
        ));

        $result->closeCursor();
        header("location: calls.php");

    } catch (Exception $e) {
        echo "Error line: " . $e->getLine() . $e->getMessage();
    } finally {
        $base = null;
    }
?>