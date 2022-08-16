<html>

<head>
  <title>Problema</title>
</head>

<body>

    <?php
    $conexion01   = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

    $registros01  = mysqli_query($conexion01, "select count(*) 
                                              as cantidadAlum 
                                              from alumnos ") 
                                              or die("Problemas en el select:" . mysqli_error($conexion));

    $resp         = mysqli_fetch_array($registros01);

    echo "<h1> Cantidad alumnos inscritos: \"$resp[cantidadAlum]\" </h1>";
    mysqli_close($conexion01);

    ?>

  <?php
  $conexion       = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

    $registros    = mysqli_query($conexion, "select alu.codigo as codigo,
                                          alu.nombre,
                                          alu.mail,
                                          alu.codigocurso, 
                                          cur.nombrecurso 
                                     from alumnos as alu
                                     inner join cursos as cur on cur.codigo = alu.codigocurso limit $inicio,4") or
    die("Problemas en el select:" . mysqli_error($conexion));

  while ($reg = mysqli_fetch_array($registros)) {
    echo "Codigo:" . $reg['codigo'] . "<br>";
    echo "Nombre:" . $reg['nombre'] . "<br>";
    echo "Mail:" . $reg['mail'] . "<br>";
    echo "Curso:" . $reg['nombrecurso'] . "<br>";
    echo "<hr>";
  }  
  if ($inicio == 0)
    echo "anteriores ";
  else {
    $anterior = $inicio - 4;
    echo "<a href=\"paginacion.php?pos=$anterior\">Anteriores </a>";
  
  if ($impresos == 4) {
    $proximo = $inicio + 4;
    echo "<a href=\"paginacion.php?pos=$proximo\">Siguientes</a>";
  } else
    echo "siguientes";
  }
   
    echo "<hr>";
  

  mysqli_close($conexion);
  ?>
  
  <form action="index.html" method= "post">
    <input type="submit" value="Inicio">
  </form>

</body>

</html>