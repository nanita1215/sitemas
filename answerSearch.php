<html>

<head>
  <title>answerSearch</title>
</head>

<body>

<h1>Consulta y modificación de Alumnos</h1>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select alum.codigo, alum.nombre, alum.mail, alum.codigocurso, cur.nombrecurso
                        from alumnos as alum inner join cursos as cur on cur.codigo = alum.codigocurso where mail='$_REQUEST[mail]'") or
    die("Problemas en el select:" . mysqli_error($conexion));

  if ($reg01 = mysqli_fetch_array($registros)) {
    echo "Codigo Alumno: "  . $reg01['codigo'] . "<br>";
    echo "Nombre: "         . $reg01['nombre'] . "<br>";
    echo "Mail: "           . $reg01['mail'] . "<br>";
    echo "Nombre Curso: "   . $reg01['nombrecurso'] . "<br>";
    echo "Código Curso: "   . $reg01['codigocurso'] ;    
    
  } else {
    echo "No existe un alumno con ese mail.";
  }
  ?>


<form action="changeEmail.php" method= "post">
<input type="hidden" name="mailviejo" value="<?php echo $reg01['mail'] ?>">
  <p>Si quiere modificar el curso, selecccione el curso nuevo. </p>
  
  <select name="codigocurso">
    <?php
          $registros = mysqli_query($conexion, "select * from cursos") or
          die("Problemas en el select:" . mysqli_error($conexion));
          while ($reg02 = mysqli_fetch_array($registros)) {
            if ($reg01['codigocurso'] == $reg02['codigo'])
            echo "<option value=\"$reg02[codigo]\" selected>$reg02[nombrecurso]</option>";
            else
            echo "<option value=\"$reg02[codigo]\">$reg02[nombrecurso]</option>";
          }
          mysqli_close($conexion);
          ?>
      </select>

      
      <p>Si quiere modificar el nombre, ingrese el nombre nuevo. </p>
      <input type="text" name="cambionombre" value="<?php echo $reg01['nombre'] ?>">


      <p>Si quiere modificar el mail, ingrese el mail nuevo. </p>
      <input type="text" name="cambioemail" value="<?php echo $reg01['mail'] ?>">

      <input type="hidden" name="cambiocodigo" value="<?php echo $reg01['codigo'] ?>">

      <br>
      <br>

    <input type="submit" value="Modificar">
    </form>

    <form action="menu.php" method= "post">
    <input type="submit" value="Inicio">
    </form>
</body>

</html>