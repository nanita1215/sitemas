<html>
<style>
  div {
    text-align: center;
  }
</style>
<head>
  <title>Problema</title>
</head>
<body>
  
<?php
// incluirlo en la pagina de las consultas  
if (isset($_REQUEST['pos']))
$inicio = $_REQUEST['pos'];
else
$inicio = 0;
?>

<div>
<?php
    require_once("../externo1.php");


    $conexion01= retornarConexion();

    $registros01  = mysqli_query($conexion01, "select count(*) 
                                              as cantidadAlum 
                                              from alumnos ") 
                                              or die("Problemas en el select:" . mysqli_error($conexion));

    $resp         = mysqli_fetch_array($registros01);

    echo "<h1> Cantidad alumnos inscritos: \"$resp[cantidadAlum]\" </h1>";
    mysqli_close($conexion01);

    ?>

  <?php
  $conexion       = retornarConexion();
  $impresos =     0 ;
  
    $registros    = mysqli_query($conexion, "select alu.codigo as codigo,
                                          alu.nombre,
                                          alu.mail,
                                          alu.codigocurso,
                                          alu.fechanac,
                                          alu.contraseña, 
                                          cur.nombrecurso 
                                     from alumnos as alu
                                     inner join cursos as cur on cur.codigo = alu.codigocurso limit $inicio,4") or
    die("Problemas en el select:" . mysqli_error($conexion));

  while ($reg = mysqli_fetch_array($registros)) {
    $impresos ++;
    echo "Codigo:" . $reg['codigo'] . "<br>";
    echo "Nombre:" . $reg['nombre'] . "<br>";
    echo "Mail:" . $reg['mail'] . "<br>";
    echo "Fecha de Nacimiento:" . $reg['fechanac'] . "<br>";
    echo "Curso:" . $reg['nombrecurso'] . "<br>";
    echo "<form action='modificar2.php' method= 'post'>  
        <input type='hidden' value='$reg[codigo]' name='codigo'><br>
        Editar 
        <input type = 'submit' value = '✏️'>          
        </form>";

        echo "<form action='borrarReg2.php' method= 'post'>    
        <input type='hidden' value='$reg[codigo]' name='codigo'>
        Borrar <input type = 'submit' value = '❌'>          
        </form>";
        


  //   <form action="2.php" method="post">
  //   Ingrese el codigo del alumno:
  //   <input type="text" name="codigo"><br>
  //   <input type="submit" value="buscar">
  // </form>
    echo "<hr>";
  }  
  if ($inicio == 0)
    echo "anteriores ";
  else {
    $anterior = $inicio - 4;
    echo "<a href=\"tablaAlumnos.php?pos=$anterior\">Anteriores </a>";
  }
  if ($impresos == 4) {
    $proximo = $inicio + 4;
    echo "<a href=\"tablaAlumnos.php?pos=$proximo\">Siguientes</a>";
  } else{
    echo "siguientes";
  }
   
    echo "<hr>";
  

  mysqli_close($conexion);
  ?>
</div>
  <form action="../menu.php" method= "post">
    <input type="submit" value="Inicio">
  </form>

</body>

</html>