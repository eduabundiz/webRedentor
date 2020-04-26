<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>El Redentor Mx. Pedicaciones</title>
    <link rel="icon" type="image/webp" href="logo1.jpg">    
    <link rel="stylesheet" href="normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="predicaciones.css">
  </head>
  <body>

    
    <div class="hero">
      <h1>Predicaciones del Pastor Francisco Vázquez</h1>
      <h2>"Teme a Dios y guarda sus mandamientos" <br> Eclesiastés 12:13 </h2>
    </div>
    <section class="predica" id="centrar">
        <figure class="predicacion">
          <!-- Para audios-->
         <!-- <a href="#"><img src="pastor.jpg" alt="" width="250px"></a> -->
          <?php 
            $url = $_GET['url'];
            echo "<iframe width='560' height='315'
             src= $url
             frameborder='0' allow='accelerometer; autoplay; 
             encrypted-media; gyroscope; picture-in-picture'
              allowfullscreen></iframe> ";
          ?>
          
          <?php
            $titulo = $_GET['titulo'];
            $pasaje = $_GET['pasaje'];
            $date = $_GET['date'];
            $predicador = $_GET['predicador'];
            echo "
              <p class='title'>Título: $titulo</p>
              <p class='Pasaje'>Pasaje: $pasaje</p>
              <p class='date'>Fecha: $date</p>
              <p class='pastor'> $predicador</p>
              " ;
          ?>
        </figure>

    </section>
    <section class="boton"> <a class="buttom" value="Regresar" href="https://elredentorgdl.000webhostapp.com/index.php"> Volver a Predicaciones </a></section>
    <section class="contact">
      <h2 class="hc">Visita nuestras redes sociales</h2>
        <div class="social">
          <a target="_blank" href="https://www.facebook.com/Tabern%C3%A1culo-El-Redentor-Tlajomulco-106475330749952/" class="social-link facebook"></a>
          <a target="_blank" href="https://www.instagram.com/tbbelredentormx/" class="social-link instagram"></a>
        </div>
      </div>

    </section>
    <footer>
      <p class="pf">Todos los derechos reservados</p>
    </footer>
  </body>
</html>
