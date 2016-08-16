<?php

$link = mysql_connect("localhost", "root");

$myusername = $_POST['usuario'];
$mypassword = $_POST['password']; 


$sql =  "INSERT INTO  `libros`.`usuarios` (`idUsuario` ,`usuario` ,`password`) VALUES (NULL ,'$myusername','$mypassword')" ;


$result = mysql_query($sql);
echo "¡Gracias! Usuario Registrado.\n";

?>