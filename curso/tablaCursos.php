<?php
if (isset($_REQUEST['pos'])) $inicio = $_REQUEST['pos']; else $inicio = 0;
$pages = 2;
$impresos = 0;
?>

<html>

<head>
  <title>Problema</title>
</head>

<body>

    <?php
    $conexion01 = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

    $registros01  = mysqli_query($conexion01, "select count(*) as cantidadCur from cursos ") or
    die("Problemas en el select:" . mysqli_error($conexion));

    $resp         = mysqli_fetch_array($registros01);

    echo "<h1> Cantidad cursos disponibles: \"$resp[cantidadCur]\" </h1>";
    mysqli_close($conexion01);
    

    ?>

  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select codigo,nombrecurso from cursos limit $inicio, $pages") or
    die("Problemas en el select:" . mysqli_error($conexion));
  

  while ($reg = mysqli_fetch_array($registros)) {
    $impresos++;
    echo "Codigo:" . $reg['codigo'] . "<br>";
    echo "Nombre del curso:" . $reg['nombrecurso'] . "<br>";
    echo "<hr>";
  }
  if ($inicio == 0)
    echo "anteriores ";
  else {
    $anterior = $inicio - $pages;
    echo "<a href=\"tablaCursos.php?pos=$anterior\">Anteriores </a>";
  }
  if ($impresos == $pages) {
    $proximo = $inicio + $pages;
    echo "<a href=\"tablaCursos.php?pos=$proximo\">Siguientes</a>";
  } else
    echo "siguientes";
  mysqli_close($conexion);

  
  ?>
    <br>
  <form action="index.html" method= "post">
    <input type="submit" value="Inicio">
  </form>

</body>

</html>