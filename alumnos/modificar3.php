<html>

<head>
    <title>Problema</title>
</head>

<body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "base1") or
        die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "update alumnos                          
                                           set codigocurso=$_REQUEST[codigocurso],                                                                          
                                               nombre='$_REQUEST[nombre]',mail='$_REQUEST[mail]',
                                               contraseña='$_REQUEST[contra]', fechanac='$_REQUEST[date]'	  
                                           where codigo=$_REQUEST[codigo]") or
                die("Problemas en el select:" . mysqli_error($conexion));
    echo "El alumno fue modificado con exito";
    ?>

<form action="../menu.php" method= "post">
    <input type="submit" value="Inicio">
  </form>
</body>

</html>