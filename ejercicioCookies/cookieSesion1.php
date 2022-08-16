<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  if (isset($_COOKIE['usu']))
    echo "Cookie de sesión creada. Su valor es $_COOKIE[usu]";
  else
    echo "No existe cookie de sesión";
  ?>
  <br>
  <a href="cookieSesion2.php">Crear cookie de sesión</a>

  <form action="index.html" method= "post">
    <input type="submit" value="Inicio">
  </form>
  
</body>

</html>