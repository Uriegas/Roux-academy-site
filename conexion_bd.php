<?php
    $bd = 'roux_academy';
    $servidor = 'localhost';
    $usuario = 'root';
    $contrasena = 'Jholacomo1';
    $conexion = mysqli_connect($servidor, $usuario, $contrasena, $bd);

    function valida_usuario_bd($usuario, $contrasena, $conexion) {
        $query = "SELECT 1 AS user_valido FROM usuarios WHERE usuario = '$usuario' AND contrasena = MD5('$contrasena')";
        $resultado = mysqli_query($conexion, $query) or die('Error al ejecutar la consulta');
        
        if (mysqli_num_rows($resultado) == 0) {
            return false;
        }
        return true;
    }

    function obtener_artista($conexion){
        $query = "SELECT * FROM artistas";
        $resultado = mysqli_query($conexion, $query) or die('Error al ejecutar la consulta');
        if( $resultado ){

            //Ahora valida que la consuta haya traido registros
            if( mysqli_num_rows( $resultado ) > 0){
          
              //Mientras mysqli_fetch_array traiga algo, lo agregamos a una variable temporal
              while($fila = mysqli_fetch_array( $resultado ) ){
          
                //Ahora $fila tiene la primera fila de la consulta, pongamos que tienes
                //un campo en tu DB llamado NOMBRE, así accederías
                echo $fila['nombre'];
                echo "<br>";
                echo "<img src=' " . $fila['img'] . "'>";
                echo "<br>";     
                echo $fila['descripcion'];
                echo "<br><br><br>";
              }
          
            }
          
            //Recuerda liberar la memoria del resultado, 
            mysqli_free_result( $resultado );
          
         
          }
    }
?>