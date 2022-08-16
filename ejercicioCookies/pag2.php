<?php
setcookie("noticias", $_REQUEST['radio1'], time() + (60 * 60 * 24 * 365), "/");
?>
<html>

<head>
  <title>Problema</title>
</head>

<body>
  <h2>Se configuró correctamente</h2>
  <a href="pag1.php">Ir a la otra página</a>

  <form action="index.html" method= "post">
    <input type="submit" value="Inicio">
  </form>
</body>

</html>