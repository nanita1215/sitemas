<?php
$conexion = mysqli_connect("localhost", "root", "", "base1") or die ("Problemas en la conexión");

$registros = mysqli_query($conexion, "select * from mailantiguo") or
    die("Problemas en el select:" . mysqli_error($conexion));

    while ($reg = mysqli_fetch_array($registros)) {
        // echo $reg[0];
        // echo $reg[1];
        // echo $reg[2];

        echo "Codigo:" . $reg[0] . "<br>";
        echo "Nombre:" . $reg[1] . "<br>";
        echo "Mail:" . $reg[2] . "<br>";
        echo "------------------" . "<br>";
    };
    mysqli_close($conexion);

    ?>

    <form action="index.html" method= "post">
    <input type="submit" value="Inicio">
    </form>
