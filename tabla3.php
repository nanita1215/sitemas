<?php

$multiplicando= 3;
$multiplicador;

for ($multiplicador=1; $multiplicador <=10 ; $multiplicador++) {
    echo "$multiplicando" . " X " . $multiplicador . " = " . $multiplicando * $multiplicador;
    echo "<br>";
}
?>
<form action="tablasM1.php" method= "post">
    <input type="submit" value="Inicio">
  </form>