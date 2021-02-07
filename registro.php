<?php

//echo extension_loaded("mongodb") ? "loaded\n" : "not loaded\n";
//// Driver de la consulta

require 'vendor/autoload.php';
require 'config.php';
$conexion = new MongoDB\Driver\Manager("mongodb://localhost:27017");
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

    <title>tarea online hlc mongodb</title>
  </head>
  <body>

    <?php



      include'menu.php';

      if(isset($_POST['enviar'])){

        $dni = $_POST['dni'];
        $pass = $_POST['pass'];
        $email = $_POST['email'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];
        $localidad = $_POST['localidad'];

        $result =$collection_usuario->insertOne([
          'dni' => $dni,
          'pass' =>$pass,
          'email'=>$email,
          'nombre'=>$nombre,
          'apellido'=>$apellido,
          'telefono'=>$telefono,
          'direccion'=>$direccion,
          'localidad'=>$localidad,

        ]);

        if($result->getInsertedCount()!=0){

          header("Location: ./exitoRegistro.php");


        }

      }





       ?>



    <div class="container">

           <img src="img/mongo1.png" class="img-fluid">
      
       <div class="row mt-2">
    <div class="col-4"></div>

    <div class="col-4">
      
          <form method="post" action="registro.php">
          <div class="form-group">
            <label for="dni">D.N.I</label>
            <input type="text" class="form-control" id="dni" name="dni" placeholder="Inserta el D.N.I" required >
            
          </div>
          <div class="form-group">
            <label for="pass">Password</label>
            <input type="password" class="form-control" id="pass" name="pass" placeholder="Inserta el password" required>
          </div>
           <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Inserta el email" reqired >
            
          </div>
           <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Inserta el nombre" required>
            
          </div>
           <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Inserta los apellidos"required >
            
          </div>
             <div class="form-group">
            <label for="telefono">telefono</label>
           <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Inserta la telefono"required>
            
          </div>


           <div class="form-group">
            <label for="direccion">Direccion</label>
           <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Inserta la direccion"required>
            
          </div>

           <div class="form-group">
            <label for="Localidad">Localidad</label>
            <input type="text" class="form-control" id="localidad" name="localidad" placeholder="Inserta el localidad"required >
            
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