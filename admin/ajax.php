<?php

define (DB_USER, "id7857619_root");

define (DB_PASSWORD, "254088Ma!");

define (DB_DATABASE, "id7857619_mandra");

define (DB_HOST, "localhost");


$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

   $sql = "SELECT * FROM tecnica

         WHERE competencia_idcompetencia LIKE '%".$_GET['idcompetencia']."%'"; 


   $result = $mysqli->query($sql);


   $json = [];

   while($row = $result->fetch_assoc()){

        $json[$row['idtecnica']] = $row['nombre'];

   }


   echo json_encode($json);

?>

