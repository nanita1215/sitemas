<html>

<head>
  <title>Problema</title>
</head>

<body>

  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select codigo,nombrecurso from cursos") or
    die("Problemas en el select:" . mysqli_error($conexion));

  while ($reg = mysqli_fetch_array($registros)) {
    echo "Codigo:" . $reg['codigo'] . "<br>";
    echo "Nombre del curso:<a href=\"inscritos2.php?codigo=$reg[codigo]\">" . $reg['nombrecurso'] . "</a><br>";
    
    echo "<hr>";
  }

  mysqli_close($conexion);
  ?>

<form action="index.html" method= "post">
    <input type="submit" value="Inicio">
  </form>

</body>

</html>