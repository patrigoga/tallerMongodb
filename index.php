<?php

//echo extension_loaded("mongodb") ? "loaded\n" : "not loaded\n";
//// Driver de la consulta

require 'vendor/autoload.php';
require 'config.php';

session_start();

//


?>


<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Taller Mecanico</title>
  </head>
  <body>

    <?php



      include'menu.php';


if(isset($_POST['enviar'])){



$dni = $_POST['dni'];
$pass = $_POST['pass'];

$result = $collection_usuario->findOne(['dni' => $dni,'pass'=>$pass]);



if($result!=null){
   $usuario = json_decode(MongoDB\BSON\toJSON(MongoDB\BSON\fromPHP($result)), true);

   $_SESSION['dni']=$usuario['dni'];
   $_SESSION['nombre']=$usuario['nombre'];
   $_SESSION['apellido']=$usuario['apellido'];
   $_SESSION['direccion']=$usuario['direccion'];
   $_SESSION['telefono']=$usuario['telefono'];
   $_SESSION['localidad']=$usuario['localidad'];


 
header("Location: ./gestion.php");
  

   exit();


                    }else{

                   echo'<a href="registro.php" class=" btn btn-danger"> Usted no Está registrado en el sistema se puede registrar aquí<a/>';


                    }
}


       ?>



    <div class="container">

      <img src="img/mongo1.png" class="img-fluid">
      
       <div class="row mt-2">
    <div class="col-4"></div>

    <div class="col-4">
      
          <form method="post" action="index.php ">
          <div class="form-group">
            <label for="pass">D.N.I</label>
            <input type="text" class="form-control" id="dni" name="dni" placeholder="Inserta el D.N.I" required >
            
          </div>
          <div class="form-group">
            <label for="pass">Password</label>
            <input type="password" class="form-control" id="pass" name="pass" placeholder="Inserte su pasword"required>

        

            


          </div>
         
          <button type="submit" class="btn btn-success float-right" name="enviar">Enviar</button>
        </form>

    </div>



    <div class="col-4">
      



    </div>

  </div>



  

</div>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>