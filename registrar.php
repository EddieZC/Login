<?php

 include("config.php");
   session_start();

$myusername = $_POST['usuario'];
$mypassword = $_POST['password']; 


$sql =  "INSERT INTO  `libros`.`usuarios` (`idUsuario` ,`usuario` ,`password`) VALUES (NULL ,'$myusername','$mypassword')" ;


$result = mysqli_query($db,$sql);

echo("Registrado Correctamente" );

header("location: index.php");


?>