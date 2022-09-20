<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  copy($_FILES['foto']['tmp_name'], $_FILES['foto']['name']);
  echo "La foto se registro en el servidor.<br>";
  $nom = $_FILES['foto']['name'];
  echo "<img src=\"$nom\">";
  ?>

  <form action="menu.php" method= "post">
    <input type="submit" value="Inicio">
  </form>
</body>

</html>