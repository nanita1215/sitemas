
<?php
// incluirlo en la pagina de las consultas  
if (isset($_REQUEST['pos']))
  $inicio = $_REQUEST['pos'];
else
  $inicio = 0;
?>
<html>

<head>
  <title>Problema</title>
</head>

<body>

  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select alu.codigo as  
                                               codigo,
                                               nombre,
                                               mail,
                                               codigocurso, 
                                               nombrecurso 
		                                      from alumnos as alu
                                          inner join cursos as cur on cur.codigo=alu.codigocurso
                                          limit $inicio,4") or
    die("Problemas en el select:" . mysqli_error($conexion));
  $impresos = 0;
  while ($reg = mysqli_fetch_array($registros)) {
    $impresos++;
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
  }
  if ($impresos == 4) {
    $proximo = $inicio + 4;
    echo "<a href=\"paginacion.php?pos=$proximo\">Siguientes</a>";
  } else
    echo "siguientes";
  mysqli_close($conexion);
  ?>

<form action="index.html" method= "post">
    <input type="submit" value="Inicio">
  </form>

</body>

</html>