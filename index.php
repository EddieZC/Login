
<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['usuario']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM usuarios WHERE usuario = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {

         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>


<!DOCTYPE html>
<html lang="en">

    <head>

    <title>Login ZORRILLA </title>

      <meta charset="utf-8" /> 
      <meta name="keywords" content="HTML5, CSS3, Javascript" />

      <link rel="stylesheet" href="estilos.css" />

       <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script> 

      <script type="text/javascript" src="login.js"></script>

     
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <link href="imagenes/favicon.png" rel="icon" type="image/png" />
    </head>
    <body>
        <section id="cajaLienzo">
                <canvas id="lienzo" width="300" height="500">
                  
                  <h1>Esto en un canva</h1>
                </canvas>

        </section>
<section>
         <h1 class="welcomeMsg"></h1>
         <div class="login">
	        <h1>Iniciar Sesion</h1>
            <form method="post"  >
    	        <input type="text" id="usuario" name="usuario" placeholder="Ingresa su Usuario" required  />
                <input type="password" id="password" name="password" placeholder="Ingresa su Clave" required/>
                <button type="submit" id="LoginBtn" class="btn btn-block btn-large">Entrar</button>
                

            </form>
        </div>

  </section>



    <footer>
        <div class='define'>
            <form method="post" action="crear.html">
             <button  type="submit" id="Crear" class="btn btn-block btn-large">Crear</button>
            </form>
        </div>
    </footer>



    </body>
</html>

