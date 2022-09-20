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
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

    $conexion01 = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

    $registros01  = mysqli_query($conexion01, "select count(*) as cantidadCur from cursos ") or
    die("Problemas en el select:" . mysqli_error($conexion));

    $resp         = mysqli_fetch_array($registros01);

    echo "<h1> Cantidad cursos disponibles: \"$resp[cantidadCur]\" </h1>";
    mysqli_close($conexion01);

    $registros = mysqli_query($conexion, "select count(alu.codigo) as cantidad,
                                            nombrecurso,
                                            codigocurso 
                                        from alumnos as alu
                                        inner join cursos as cur on cur.codigo=alu.codigocurso
                                        group by alu.codigocurso limit $inicio, $pages") or
    die("Problemas en el select:" . mysqli_error($conexion));
  while ($reg = mysqli_fetch_array($registros)) {
    $impresos++;
    echo "Nombre del curso: " . $reg['nombrecurso'] . "<br>";
    echo "Codigo de curso: " . $reg['codigocurso'] . '<br>';
    echo "Cantidad de inscriptos:" . $reg['cantidad'] . "<br>";
    echo "<form action='editar2.php' method= 'post'>  
        <input type='hidden' value='$reg[codigocurso]' name='codigo'><br>
        Editar curso 
        <input type = 'submit' value = '✏️'>          
        </form>";
    

    
    
    $registros2 = mysqli_query($conexion, "select nombre 
                                           from alumnos 
                                           where codigocurso=$reg[codigocurso]") or
      die("Problemas en el select:" . mysqli_error($conexion));
    while ($reg2 = mysqli_fetch_array($registros2)) {
      echo $reg2['nombre'] . "-";
    }
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

<form action="../menu.php" method= "post">
    <input type="submit" value="Inicio">
  </form>
</body>

</html>