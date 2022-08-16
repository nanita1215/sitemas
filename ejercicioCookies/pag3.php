<?php
setcookie("noticias", "", time() - 100, "/");
?>
<html>

<head>
    <title>Problema</title>
</head>

<body>
    <h2>Se borró correctamente</h2>
    <a href="pag1.php">Ir a la otra página</a>

    <form action="index.html" method= "post">
    <input type="submit" value="Inicio">
  </form>
  
</body>

</html>