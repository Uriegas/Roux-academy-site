<?php
    require "conexion_bd.php";

    $valido = false;

    if (isset($_POST["aceptar"])) {
        $usuario = $_POST["usuario"];
        $contrasena = $_POST["contrasena"];
        
        if (!valida_usuario_bd($usuario, $contrasena, $conexion)) {
            $valido = false; 
        } else {
            session_start();
            $valido = true;
            $_SESSION["usuario"] = $usuario;
            header("Location:index.php");
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<header>
  <div class="branding"> <img src="images/ralogo_monogram.png" alt="Logo">
    <p>Roux Academy<br>
      Art • Media • Design</p>
  </div>
  <div class="description">
    <h1>Roux Academy 2016 Art Conference</h1>
    <p>Join over 500 hundred of the most creative and brilliant minds of art colleges all around the world for five days of lectures by world-renowned art scholars and artists, and seven days and nights of gallery exhibits featuring the best in contemporary art, including painting, sculpture, and more, in the beautiful halls of Hotel Contempo in the heart of Seattle.</p>
  </div>
  <nav>
    <ol>
      <li><a href="index-public.php">HOME</a></li>
      <li><a href="artists.php">ARTISTS</a></li>
      <li><a href="schedule/index.php">SCHEDULE</a></li>
      <li><a href="venue.php">VENUE/TRAVEL</a></li>
      <li><a href="attendees.php">ATTENDEES</a></li>
      <!-- <li><a href="login.php">LOG OUT</a></li> -->
    </ol>
  </nav>
</header>

<body>
<body id="page_home">
<div class="wrapper">
  <div id="rotator"><img src="images/art01.jpg" width="1000" height="320" alt="Artwork from show"></div>
  <!-- Rotator -->
  <section id="main" style="text-align:center; font-size:20px;">
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="text" name="usuario" class="form_ctrl" placeholder="usuario" required="Introduce el nombre de usuario">
        <br>
        <input type="password" name="contrasena" class="form_ctrl" placeholder="contrasena" required>
        <br><br>
        <input type="submit" value="Ingresar" name="aceptar" class="btn">
        <br><br>
        <?php
          if (!$valido && isset($_POST["aceptar"])) {
            echo "<p class='alerta'>Usuario y/o contrasena no valido</p>";
          }
        ?>
        <a href="register/index.php">Registrar usuario</a>
      </form>
  </section>
  <!-- maincontent -->
  
  <aside id="sidebar" class="clearfix">
    <article id="comingtoevent">
      <h2 class="highlight">Coming to the event?</h2>
      <h3>Check out our mobile site</h3>
      <p>Our mobile site contains schedules, and exhibit/ artist details, accessible simply by scanning QR codes located all around the venue exhibit halls.</p>
      <p><img src="images/iphone.png" alt="iPhone"></p>
      <p><a class="link" href="#">Roux Mobile</a></p>
    </article>
    <!-- Coming to event -->
    
    <article id="schedule">
      <h2>Schedule</h2>
      <h3>Monday</h3>
      <p>The first day of CAC events is kicked off under the theme of Art in Full Color. From a demonstration in graffiti art on a wall of the  Rousseau Room, to the exhibit of colorful glazed modern glassware in the Dover Hall.</p>
      <h3>Tuesday</h3>
      <p>Water in Art is the theme for the second day, as art students gather at the Fountain of Intrigue to create ice sculptures, and art lecturers discuss the use of water as an art material, and water as an art subject.</p>
      <p><a class="link" href="schedule/index.php">Full Schedule</a></p>
    </article>
    <!-- Schedule --> 
  </aside>
  <!-- Sidebar -->
  <?php
    include './includes/footer.php';
  ?>
</div>
</body>
</html>