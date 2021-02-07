<?php 
    $conexion=new MongoDB\Client("mongodb://localhost:27017");
    $collection_usuario = $conexion->taller->usuario;
    $collection_vehiculos = $conexion->taller->vehiculo;