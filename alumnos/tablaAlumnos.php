<html>
  <head>
  <title>Problema</title>
  <link rel="stylesheet" href="../public/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <style>
    div {
      text-align: center;
    }
    div.card-p{
      border-radius: 25px;
      width: 420px;
    }
    ul {
      list-style: none;
    }
  </style>

</head>
    <body>
<?php
// incluirlo en la pagina de las consultas  
if (isset($_REQUEST['pos']))
$inicio = $_REQUEST['pos'];
else
$inicio = 0;
?>
<?php
    require_once("../externo1.php");


    $conexion01= retornarConexion();

    $registros01  = mysqli_query($conexion01, "select count(*) 
                                              as cantidadAlum 
                                              from alumnos ") 
                                              or die("Problemas en el select:" . mysqli_error($conexion));

    $resp         = mysqli_fetch_array($registros01);

    echo "<h2 class=''> Cantidad alumnos inscritos: \"$resp[cantidadAlum]\" </h2>";
    mysqli_close($conexion01);

    ?>

<div class="container m-5 p-2 d-flex">

  <?php
  $conexion       = retornarConexion();
  $impresos =     0 ;
  
    $registros    = mysqli_query($conexion, "select alu.codigo as codigo,
                                          alu.nombre,
                                          alu.mail,
                                          alu.codigocurso,
                                          alu.fechanac,
                                          alu.contraseña, 
                                          alu.genero,
                                          cur.nombrecurso 
                                     from alumnos as alu
                                     inner join cursos as cur on cur.codigo = alu.codigocurso limit $inicio,4") or
    die("Problemas en el select:" . mysqli_error($conexion));

  while ($reg = mysqli_fetch_array($registros)) :?> 
    <?php $impresos++?>
    <div class="card-group card-p m-4">
      <div class="card">
        <div class="card-body d-flex">
          <?php
            if($reg['genero']== 'F'):?>
              <i class="bi bi-gender-female"></i>
            <?php else: ?>
              <i class="bi bi-gender-male"></i>

          <?php endif ?>
        
          <h5 class="card-title"><?=$reg['nombre']?></h5>
          <div class="card-text">

            <ul>
              <li>Codigo: <?=$reg['codigo']?></li>
              <li>Email: <?=$reg['mail']?></li>
              <li>Fecha de nacimiento: <?=$reg['fechanac']?></li>
              <li>Curso: <?=$reg['nombrecurso']?></li>
            </ul>
            <form action='modificar2.php' method= 'post'>  
              <input type='hidden' value='<?=$reg['codigo']?>' name='codigo'><br>
            Editar 
              <input type = 'submit' value = '✏️'>          
            </form>

            <form action='borrarReg2.php' method= 'post'>    
              <input type='hidden' value='$reg[codigo]' name='codigo'>
              Borrar <input type = 'submit' value = '❌'>          
            </form>
              <hr>
          </div>
          
        </div>
      </div>
    </div>  
    
  <?php endwhile ?>
  </div>
  <div class="container m-5 p-3">
      <div class="row">
        <?php if ($inicio == 0) :?>
          anteriores
        <?php else:?>
          <?php $anterior = $inicio - 4;?>
              <a href=\"tablaAlumnos.php?pos=$anterior\">Anteriores </a>
        <?php endif?>
        <?php if ($impresos == 4) :?>

              <?php $proximo = $inicio + 4;?>
              <a href=\"tablaAlumnos.php?pos=$proximo\">Siguientes</a>

          <?php else:?>
           siguientes 
          <hr>
        <?php endif?>
      </div>
  </div>
  <?php mysqli_close($conexion);?>

  <form action="../menu.php" method= "post">
    <input type="submit" value="Inicio">
  </form>
  
  </section>

</body>
<script src="../public/js/bootstrap.bundle.min.js"></script>


</html>