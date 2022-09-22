<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select * from alumnos
                        where codigo=$_REQUEST[codigo]") or
    die("Problemas en el select:" . mysqli_error($conexion));
  if ($regalu = mysqli_fetch_array($registros)) {
    ?>
    <form action="modificar3.php" method="post">
      Nombre: <input type="text" name="nombre" value="<?php echo $regalu['nombre'] ?>"><br>
      Mail: <input type="text" name="mail" value="<?php echo $regalu['mail'] ?>"><br>
      Contraseña: <input type="password" name="contra" value="<?= $regalu['contraseña'] ?>"><br>
      Fecha de nacimiento: <input type="date" name="date" value="<?= $regalu['fechanac'] ?>"><br>
      
      <input type="hidden" name="codigo" value="<?php echo $regalu['codigo'] ?>"><br>
      <select name="codigocurso">
        <?php
          $registros = mysqli_query($conexion, "select * from cursos") or
            die("Problemas en el select:" . mysqli_error($conexion));
          while ($reg = mysqli_fetch_array($registros)) {
            if ($regalu['codigocurso'] == $reg['codigo'])
              echo "<option value=\"$reg[codigo]\" selected>$reg[nombrecurso]</option>";
            else
              echo "<option value=\"$reg[codigo]\">$reg[nombrecurso]</option>";
          }
          ?>
      </select>
      <br>
      <input type="submit" value="Modificar ✏️">
    </form>

    <form action="../menu.php" method= "post">
    <input type="submit" value="Inicio 🏠">
  </form>
  <?php
  } else
    echo "No existe alumno con dicho código";
  ?>
</body>

</html>