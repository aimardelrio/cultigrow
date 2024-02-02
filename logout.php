<?php
/**
 * @title: Proyecto integrador Ev01 - Salir sistema.
 * @description:  Script para salir borrando la sesión
 *
 * @version    0.1
 * @author ander_frago@cuatrovientos.org
 */
session_start();

  if (isset($_SESSION['user']))
  {
    session_destroy();
    echo "<div class='main'>Has salido de tu sesión. " ;
    // redirección a la pantalla principal
    header('Location: ./index.php');
  }
  else {echo "<div class='main'><br>" .
            "No puedes salir de sesión por que no estas registrado";}
?>
    </div>
  </body>
</html>