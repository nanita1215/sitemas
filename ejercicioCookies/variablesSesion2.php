<?php
session_start();
$conexion = mysqli_connect("localhost", "root", "", "base1") or
  die("Problemas con la conexión");

$registros = mysqli_query($conexion, "select codigo, nombre, codigocurso
                        from alumnos where mail='$_REQUEST[mail]'") or
  die("Problemas en el select:" . mysqli_error($conexion));

if ($reg = mysqli_fetch_array($registros)) {
  $_SESSION['usuario'] = $reg['nombre'];
}

?>
<html>

<head>
  <title>Problema</title>
</head>

<body>
  <a href="variablesSesion3.php">Ingresar a pagina principal</a>;

  <form action="../index.html" method= "post">
    <input type="submit" value="Inicio">
  </form>
  
</body>

</html>