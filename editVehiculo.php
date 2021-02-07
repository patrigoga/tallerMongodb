<?php

require 'vendor/autoload.php';
require 'config.php';

session_start();

$matricula = $_GET['matricula'];




if(isset($_GET['matricula'])){

		$matricula= $_GET['matricula'];

		$result = $collection_vehiculos->find(['matricula' => $matricula]);



			  if($result!= null){
			  foreach ($result as $vehiculo){
                $modificar = json_decode(MongoDB\BSON\toJSON(MongoDB\BSON\fromPHP($vehiculo)), true);}

		


 }
}

if(isset($_POST['editar'])){

         $matricula = $_POST['matricula'];
         $color =  $_POST['color'];
         $puertas =  $_POST['puertas'];
         $fecha =$_POST['fecha'];
         $cv = $_POST['cv'];
         $combustible =  $_POST['combustible'];
         $km = $_POST['km'];


  $updateResult =$collection_vehiculos->updateOne(['matricula'=>$matricula],['$set'=> ['color'=>$color, 'puertas'=>$puertas,'fecha_m'=>$fecha, 'cv'=>$cv, 'combustible'=>$combustible,'km'=>$km]]);
         
header("Location: ./gestion.php");
}

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

     
       ?>



    <div class="container">

      <img src="img/mongo1.png" class="img-fluid">
      
       <div class="row mt-2">
    <div class="col-4"></div>

    <div class="col-4">
      
          <form method="post" action="editVehiculo.php?id=$matricula">
          <div class="form-group">
            <label for="color">Color</label>
            <input type="text" class="form-control" id="color" name="color" value="<?php  echo$vehiculo['color'];?>" >
            <input type="hidden" class="form-control" id="matricula" name="matricula" value="<?php  echo$vehiculo['matricula'];?>" >

            
          </div>
      
          
           <div class="form-group">
            <label for="puertas">Puertas</label>
            <input type="text" class="form-control" id="puertas" name="puertas" value="<?php  echo$vehiculo['puertas'];?>" >
            
          </div>
         
             <div class="form-group">
              <label for="puertas">Fecha</label>
           <input type="text" class="form-control" id="fecha" name="fecha" value="<?php  echo$vehiculo['fecha_m'];?>" >
            
          </div>


           <div class="form-group">
            <label for="cv">Cv</label>
           <input type="text" class="form-control" id="cv" name="cv" value="<?php  echo$vehiculo['cv'];?>" >
            
          </div>

           <div class="form-group">
            <label for="combustible">Combustible</label>
            <input type="text" class="form-control" id="combustible" name="combustible"  value="<?php  echo$vehiculo['combustible'];?>">
            
          </div>
          <div class="form-group">
            <label for="km">Kilometros</label>
            <input type="text" class="form-control" id="km" name="km" value="<?php  echo$vehiculo['km'];?>" >
            
          </div>
         
          <button type="submit" class="btn btn-success float-right" name="editar">Editar</button>
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
