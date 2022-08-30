<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php


  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");
    mysqli_query($conexion, "delete from alumnos where codigo='$_POST[codigo]'") or
      die("Problemas en el select:" . mysqli_error($conexion));
      echo "Se efectuó el borrado del alumno de forma exitosa.";
   
    mysqli_close($conexion);

  ?>

<form action="index.html" method= "post">
    <input type="submit" value="Inicio 🏠">
  </form>
</body>

</html>