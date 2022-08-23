<html>
<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  $fechanacimiento = $_REQUEST['anio'] . "-" . $_REQUEST['mes'] . "-" . $_REQUEST['dia'];
  mysqli_query($conexion, "insert into alumnos(nombre,mail,codigocurso,fechanac) values 
                       ('$_REQUEST[nombre]','$_REQUEST[mail]',$_REQUEST[codigocurso],'$fechanacimiento')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "El alumno fue dado de alta.";
  ?>  
  <form action="RegAlum.php" method= "post">
    <input type="submit" value="Regresar">    
  </form>

  <form action="index.html" method= "post">
    <input type="submit" value="Inicio">
  </form>

</body>

</html>