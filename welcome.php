<?php
   include('session.php');
?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Bienvenido <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">Cerrar Sesion</a></h2>
   </body>
   
</html>