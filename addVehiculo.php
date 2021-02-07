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

    <title>tarea online hlc mongodb</title>
  </head>
  <body>

    <?php



      include'menu.php';

      if(isset($_POST['guardar'])){

        $dni = $_SESSION['dni'];
        $matricula = $_POST['matricula'];
        $color = $_POST['color'];
        $puertas = $_POST['puertas'];
        $fecha = $_POST['fecha'];
        $cv = $_POST['cv'];
        $combustible = $_POST['combustible'];
        $km = $_POST['km'];

       
      

        $result =$collection_vehiculos->insertOne([
          'dniUser' => $dni,
          'matricula' => $matricula,
          'color' => $color,
          'puertas' => $puertas,
          'fecha_m' => $fecha,
          'cv'=> $cv,
          'combustible' => $combustible,
          'km' => $km,

          ]);

       header("Location: ./gestion.php");
      }





       ?>



    <div class="container">

           <img src="img/mongo1.png" class="img-fluid">
      
       <div class="row mt-2">
    <div class="col-4"></div>

    <div class="col-4">
      
          <form method="post" action="addVehiculo.php">

             <div class="form-group">
            <label for="matricula">Matricula</label>
            <input type="text" class="form-control" id="matricula" name="matricula" required >
               
          </div>


         <div class="form-group">
            <label for="color">Color</label>
            <input type="text" class="form-control" id="color" name="color" required >
               
          </div>
      
          
           <div class="form-group">
            <label for="puertas">Puertas</label>
            <input type="text" class="form-control" id="puertas" name="puertas"required >
            
          </div>
         
             <div class="form-group">
            <label for="fecha">fecha Fabricación</label>
           <input type="text" class="form-control" id="fecha" name="fecha" required >
            
          </div>


           <div class="form-group">
            <label for="cv">Cv</label>
           <input type="text" class="form-control" id="cv" name="cv" required >
            
          </div>

           <div class="form-group">
            <label for="combustible">Combustible</label>
            <input type="text" class="form-control" id="combustible" name="combustible" required>
            
          </div>
          <div class="form-group">
            <label for="km">Kilometros</label>
            <input type="text" class="form-control" id="km" name="km" required>
            
          </div>
         
          <button type="submit" class="btn btn-success float-right" name="guardar">Guardar</button>
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