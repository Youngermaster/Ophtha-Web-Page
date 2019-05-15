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

    <title>New Call | Ophtha</title>
</head>
<body class="text-center">

  <form class="form-signin" action="new_call_insert.php" method="post" enctype="multipart/form-data" autocomplete="off">
    <img src="../assets/images/Logos/Ophta-logo-75x75-transparent.png" alt="" width="72" height="72">
    <br>
    <h1 class="h3 mb-3 font-weight-normal">New Call</h1>
    <br>
  
    <input type="text" placeholder="Call ID" class="form-control" name="callId" required/>
    <input type="text" placeholder="Code" class="form-control" name="code" required/>
    <input type="text" placeholder="ID type" class="form-control" name="idType" required/>
    <input type="text" placeholder="ID" class="form-control" name="id" required/>
    <input type="text" placeholder="Status" class="form-control" name="status" required/>
    <input type="text" placeholder="Call date" class="form-control" name="callDate" required/>
    <input type="text" placeholder="Hour" class="form-control" name="hour" required/>
    <textarea class="form-control" rows="5" id="inputComment" name="comment" placeholder="Comment" required></textarea>

    <br>
    <input type="submit" value="add" name="add" class="btn btn-primary"/>
    <a class="btn btn-outline-danger my-2 mr-2 my-lg-0 " href="calls.php" role="button">cancel</a>
            
    <p class="mt-5 mb-3 text-muted">&copy 2019 | All rights reserved.</p>
  </form>
  
</body>
</html>