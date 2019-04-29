<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Check Log In</title>
</head>
<body>
    <?php

    try {
        $base = new PDO("mysql:host=localhost; dbname=ophtha", "root", "");

        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql_sentence = "SELECT * FROM usuario WHERE nombre_usuario= :username AND contraseña= :password";

        $result = $base->prepare($sql_sentence);

        $username = htmlentities(addslashes($_POST["username"]));
        $password = htmlentities(addslashes($_POST["password"]));

        $result->bindValue(":username", $username);
        $result->bindValue(":password", $password);

        $result->execute();

        $register_number = $result->rowCount();

        if($register_number != 0) {
          header("location:registers.php");
        }
        else {
          header("location:login.php");
        }

    } catch(Exception $e) {
        die("Error: " . $e->getMessage());
    }

    ?>
</body>
</html>