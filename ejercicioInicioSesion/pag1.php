<html>

<head>
  <title>Problema</title>
</head>

<style>
    form {
        border: 2px red solid;
        position: absolute;
        width: 200px;
        margin: 105px;

    }

    form.boton {
        border: red solid 2px
        position:relative;
        width: 180px;
        padding: 105px;
    }
    input {
        position: relative;
        display: flex;
        background: #aa0;
        flex-direction: column;
    }
</style>

<body>
  <form action="pag2.php" method="post">

    Ingrese el usuario o email:
    <input type="text" name="mail">
    <br>

    Ingrese contraseña:
    <input type="password" name="password" required>
    <br>
    

    <input type="submit" value="Ingresar" required>    
  </form>

  <form class= 'boton' action="../index.html" method= "post">
    <input type="submit" value="Inicio">
  </form>
</body>

</html>