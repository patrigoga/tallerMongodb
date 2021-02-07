<?php

//echo extension_loaded("mongodb") ? "loaded\n" : "not loaded\n";
//// Driver de la consulta

require 'vendor/autoload.php';
require 'config.php';

session_start();

//
$dni = $_SESSION['dni'];

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

         <img src="img/mongo1.png" class="img-fluid mb-5">

     

      <div class="row">
    <div class="col-sm-3">

  
  
 
<div class="card" style="width: 100%;">
  <img src="img/usuario.png" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Nombre: <?php echo $_SESSION['nombre']?></p>
    <p>Apellidos: <?php echo $_SESSION['apellido']?></p>
    <a href="cerrar.php" class="text-center text-danger">Cerrar Sesión</a>
  </div>
</div>



</div>


    <div class="col-sm-9">

       <table class="table table-hover ">
                                          <thead>
                                            <tr>
                                                                                         
                                              <th scope="col">Matricula</th>
                                              <th scope="col">Color</th>
                                              <th scope="col">Puertas</th>
                                              <th scope="col">Fecha</th>
                                              <th scope="col">CV</th>
                                              <th scope="col">Combustible</th>
                                              <th scope="col">Km</th>
                                              <th scope="col"></th>
                                              <th scope="col"></th>
                                              <th scope="col"><a href="addVehiculo.php"> <img src="img/anadir.jpg" style="width: 40px;"></a></th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            


      <?php 
$result = $collection_vehiculos->find(['dniUser' => $dni]);


                                          if($result!= null){
                                          foreach ($result as $user)
                                {
                                    $datosVehiculo = json_decode(MongoDB\BSON\toJSON(MongoDB\BSON\fromPHP($user)), true);

                               

                                    ?>
                                 
                                             
                                   <?php
                                   echo'<tr>';
                                                                     
                                    echo '<td> '.$datosVehiculo['matricula'].'</td>';
                                    echo '<td> '.$datosVehiculo['color'].'</td>';
                                    echo '<td> '.$datosVehiculo['puertas'].'</td>';
                                    echo '<td> '.$datosVehiculo['fecha_m'].'</td>';
                                    echo '<td> '.$datosVehiculo['cv'].'</td>';
                                    echo '<td> '.$datosVehiculo['combustible'].'</td>';
                                    echo '<td> '.$datosVehiculo['km'].'</td>';
                                    echo '<td><a class="btn btn-danger" href="delVehiculo.php?vehiculo='.$datosVehiculo['matricula'].'"><img src="img/eliminar.png" style="width: 30px;"/></a></td>';                              
                                    echo '<td><a class="btn btn-success" href="editVehiculo.php?matricula='.$datosVehiculo['matricula'].'"><img src="img/editar.png" style="width: 30px;"/></a></td>'; 

                                                                     
                                  
                                    echo'</tr>';
                                }


                                        }


                                          ?>
                                      
                                          
                                         
                                          </tbody>
                                        </table>



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