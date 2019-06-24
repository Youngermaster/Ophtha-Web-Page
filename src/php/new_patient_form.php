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
    
    <link type="text/css" rel="stylesheet" href="../css/new_call.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>Nuevo paciente | Ophtha</title>
</head>
<body class="text-center">

  <form class="form-signin" action="new_patient_insert.php" method="post" enctype="multipart/form-data" autocomplete="off">
    <img src="../assets/images/Logos/Ophta-logo-75x75-transparent.png" alt="" width="72" height="72">
    <br>
    <h1 class="h3 mb-3 font-weight-normal">Nuevo paciente</h1>
    <br>
  
    <input type="text" placeholder="Tipo de ID" class="form-control" name="idType" required/>
    <input type="text" placeholder="ID del paciente" class="form-control" name="id" required/>
    <input type="text" placeholder="Nombre" class="form-control" name="name" required/>
    <input type="text" placeholder="Teléfono" class="form-control" name="phone" required/>
    <input type="text" placeholder="Dirección" class="form-control" name="address" required/>
    <input type="text" placeholder="Interés" class="form-control" name="interest" required/>
    <input type="text" placeholder="Número de celular" class="form-control" name="mobileNumber" required/>

    <br>
    <input type="submit" value="añadir paciente" name="add" class="btn btn-primary"/>
    <a class="btn btn-outline-danger my-2 mr-2 my-lg-0" href="patient.php" role="button">Cancelar</a>
            
    <p class="mt-5 mb-3 text-muted">&copy 2019 | Todos los derechos reservados.</p>
  </form>
  
</body>
</html>