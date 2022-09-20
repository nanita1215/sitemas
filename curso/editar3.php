<html>

<head>
    <title>Problema</title>
</head>

<body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "base1") or
        die("Problemas con la conexión");

    mysqli_query($conexion, "update cursos
                          set nombrecurso='$_REQUEST[nombrecurso]' 
                        where codigo=$_REQUEST[codigo]") or
        die("Problemas en el select:" . mysqli_error($conexion));
    echo "Se modificó el nombre del curso";
    ?>
     <form action="../menu.php" method= "post">
    <input type="submit" value="Inicio 🏠">
  </form>
</body>

</html>