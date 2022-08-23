<html>

<head>
  <title>Problema</title>
</head>

<body>
  <h1>Alta de Alumnos</h1>
  <form action="envioAlumnos.php" method="post">
    Ingrese nombre:
    <input type="text" name="nombre" required><br>
    Ingrese mail:
    <input type="email" name="mail" required><br>
    Ingrese contraseña:
    <Input type="password" required><br>
    Ingrese la fecha de nacimiento (dd/mm/aaaa):
    <input type="text" name="dia" size="2">
    <input type="text" name="mes" size="2">
    <input type="text" name="anio" size="4">
    <br>
    Seleccione el curso:
    <select name="codigocurso">

      
      <?php
      $conexion = mysqli_connect("localhost", "root", "", "base1") or
      die("Problemas con la conexión");
      
      $registros = mysqli_query($conexion, "select * from cursos ") or
    die("Problemas en el select:" . mysqli_error($conexion));

    while ($reg = mysqli_fetch_array($registros)){
      echo "<option value = \"$reg[codigo]\">$reg[nombrecurso]</option>";
    }
      ?>
    </select>
    <br>
    <input type="submit" value="Registrar">
  </form>
  <form action="index.html" method= "post">
    <input type="submit" value="Inicio">
  </form>
</body>

</html>