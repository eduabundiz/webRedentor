<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Redentor Mx. Pr&eacute;dicas</title>
    <link rel="icon" type="image/webp" href="logo1.jpg">
    <link rel="stylesheet" href="normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="predicaciones.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php
        require("conexion.php");
        $conexion = mysqli_connect($host,$usuario,$contrasena,$bd);
        if(mysqli_connect_error()){
            echo "Fallo en la conexion";
            exit();
        }
        $consulta = "SELECT* FROM predica ORDER BY fecha";
        $resultados = mysqli_query($conexion,$consulta);

        $arrayPredicas = array();
        while($fila = mysqli_fetch_array($resultados)){
            $titulo = $fila['titulo'];
            $url = $fila['url'];
            $comentarios = $fila['comentarios'];
            $fecha = $fila['fecha'];
            $predicador = $fila['predicador'];
            $tema = $fila['tema'];
            $pasaje = $fila['pasaje'];            

            $arrayPredicas[] = $fila;

        }
        mysqli_close($conexion); 
    ?>
    <h1>Pr&eacute;dicas Pastor Francisco V&aacute;zquez</h1>
    <h2>"Teme a Dios y guarda sus mandamientos" <br> Eclesiast&eacute;s 12:13 </h2>
    <div class="contenedor-predicas">        
        <?php foreach($arrayPredicas as $predica){ ?>

            <div class="predicas">            
                <figure class="predicacion">                    
                    <h3 class="titulo">    
                        <?php  echo $predica['titulo']; ?>
                    </h3>
                                
                    <?php                    
                        $url = "predicaciones.php?url=".$predica['url'] ;
                        $info = $url."&pasaje=".$predica['pasaje']."&date=".$predica['fecha']."&predicador=
                        ".$predica['predicador']."&titulo=".$predica['titulo'];
                        // echo $url;
                        echo "<a href='$info'><img class='imgPastor'src='pastor.jpg' width='600px' ></a>";
                    ?>
                    <div class="info-predica">
                        <p class="pasaje"> <b>Pasaje: </b>
                            <?php echo $predica['pasaje'];?>
                        </p>
                        <p class="date"><?php echo $predica['fecha'];?> </p>
                        <p class="pastor"><b>Predicador: </b><?php echo $predica['predicador'];?></p>                
                    </div>
                </figure>
            </div> <!--Fin clase prédica -->

        <?php } ?>
    </div>
    <section class="contact">
      <h3 class="hc">Visita nuestras redes sociales</h3>
        <div class="social">
          <a href="https://www.facebook.com/Tabern%C3%A1culo-El-Redentor-Tlajomulco-106475330749952/" class="social-link facebook"></a>
          <a href="https://www.instagram.com/tbbelredentormx/" class="social-link instagram"></a>
        </div>
      </div>

    </section>
    <footer>
      <p class="pf">Todos los derechos reservados</p>
    </footer>
</body>
</html>