<?php
if ($_REQUEST['radio'] == "rojo")
  setcookie("color", "#ff000040", time() + 60 * 60 * 24 * 365, "/");
elseif ($_REQUEST['radio'] == "verde")
  setcookie("color", "#00ff0040", time() + 60 * 60 * 24 * 365, "/");
elseif ($_REQUEST['radio'] == "azul")
  setcookie("color", "#0000ff", time() + 60 * 60 * 24 * 365, "/");
?>
<html>

<head>
  <title>Problema</title>
</head>

<body>
  Se creó la cookie.
  <br>
  <a href="cookies1.php">Ir a la otra página</a>

  <form action="menu.php" method= "post">
    <input type="submit" value="Inicio">
  </form>
</body>

</html>