<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into cursos(nombrecurso) values ('$_REQUEST[nombrecurso]')") or
    die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "El curso fue dado de alta.";
  ?>

<form action="RegCurso.php" method= "post">
    <input type="submit" value="Regresar">    
  </form>
    <br>
    <form action="../menu.php" method= "post">
    <input type="submit" value="Inicio">
  </form>
</body>

</html>