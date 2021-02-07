<?php

require 'vendor/autoload.php';
require 'config.php';

session_start();


if(isset($_GET['vehiculo'])){

$vehiculo = $_GET['vehiculo'];
echo $id;

$result = $collection_vehiculos->deleteOne(["matricula"=>$vehiculo]);

if($result->getDeletedCount()!= 0){

	header("Location: ./gestion.php");


}


}


?>