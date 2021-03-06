<?php
    require 'abre_sesion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Roux Conference: Artists</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body id="page_artists">
<div class="wrapper">
  <?php
    require './includes/header.php';
  ?>
  <div id="rotator"> <img src="images/art01.jpg" alt="Artwork from show"> </div>
  <!-- Rotator -->
  <section id="main">
    <article>
      <h2>About the Attendees</h2>
      <p>The attending people of this event are incredible, here are some of the persons that will be attending to the event:</p>
      <div class="artistgroup" style="padding:80px" >

        <?php
            require "conexion_bd.php";
            $sql = "SELECT * FROM usuarios WHERE usuario != ''";
            $result = mysqli_query($conexion, $sql);
            if($result){
                    echo "<div>";
                    echo "<div><h2> ID Name</h2>"."</div>";
                while($row = mysqli_fetch_assoc($result)){
                    echo "<div><h5><b>".$row['id']."</b>  ".$row['usuario']."</h5></div>";
                }
                    echo "<div>";
            } else{
                echo "No attendees yet, be the first!!";
            }
        ?>
        <!-- <script src="script.js"></script> -->
            
      </div>
      <!-- Artist Group --> 
    </article>
    <!-- Featured Artists --> 
    
  </section>
  <!-- maincontent -->
  <aside id="sidebar">
    <article>
      <h2>The Art</h2>
      <p>This year’s art pieces will inspire thought, conversation, imagination, and even criticism, as modern art often does. From critically-acclaimed works created by our Featured Artists, to a vast assortment of works by talented art students in schools across the world.</p>
        <div class="pixgrid">
            <ul>
            <li><img src="images/art/Barot_Bellingham_tn.jpg" alt="Art from Barot Bellingham"></li>
            <li><img src="images/art/Constance_Smith_tn.jpg" alt="Art from Constance Smith"></li>
            <li><img src="images/art/Hassum_Harrod_tn.jpg" alt="Art from Hassum Harrod"></li>
            <li><img src="images/art/Hillary_Goldwynn_tn.jpg" alt="Art from Hillary Goldwynn"></li>
            <li><img src="images/art/Jennifer_Jerome_tn.jpg" alt="Art from Jennifer Jerome"></li>
            <li><img src="images/art/Jonathan_Ferrar_tn.jpg" alt="Art from Jonathan Ferrar"></li>
            <li><img src="images/art/LaVonne_LaRue_tn.jpg" alt="Art from LaVonne LaRue"></li>
            <li><img src="images/art/Riley_Rewington_tn.jpg" alt="Art from Riley Rewington"></li>
            <li><img src="images/art/Xhou_Ta_tn.jpg" alt="Art from Xhou Ta"></li>
            </ul>
        </div>
    </article>
    <!-- Featured Artists -->
    <article id="comingtoevent">
      <h2 class="highlight">Coming to the event?</h2>
      <h3>Check out our mobile site</h3>
      <p>Our mobile site contains schedules, and exhibit/ artist details, accessible simply by scanning QR codes located all around the venue exhibit halls.</p>
      <p><img src="images/iphone.png" alt="Mobile phone"></p>
      <p><a class="link" href="#">Roux mobile</a></p>
    </article>
    <!-- Coming to event --> 
  </aside>
  <!-- Sidebar -->

  <?php
    include './includes/footer.php';
  ?>
</div>
</body>
</html>