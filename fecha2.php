<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  if (is_numeric($_REQUEST['dia']) ) {
    if (is_numeric($_REQUEST['mes']) ) {
        if (is_numeric($_REQUEST['anio']) ) {

            if (checkdate(
            $_REQUEST['mes'], 
            $_REQUEST['dia'], 
            $_REQUEST['anio']))
            echo "La fecha ingresada es correcta";
            else
            echo "La fecha no es válida";
    
        } else{
          echo "El año es un texto";
        }    
    } else{
      echo "El mes es un texto";
    }
  } else{
    echo "El día es un texto";
  }
  ?>

<form action="/menu.php" method= "post">
    <input type="submit" value="Inicio">
  </form>
</body>

</html>



