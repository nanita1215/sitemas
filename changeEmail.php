<html>

<head>
    <title>Problema</title>
</head>

<body>

<h4>Registra Alumno</h4>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "base1") or
        die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "update alumnos                          
                                           set codigocurso = $_REQUEST[codigocurso], nombre = '$_REQUEST[cambionombre]', mail = '$_REQUEST[cambioemail]'
                                           
                                               where codigo = $_REQUEST[cambiocodigo]") or
                die("Problemas en el select:" . mysqli_error($conexion));
    echo "El curso fue modificado con exito";
    ?>

    <form action="index.html" method= "post">
    <input type="submit" value="Inicio">
    </form>
</body>

</html>