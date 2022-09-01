<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="public/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <title>Template</title>
</head>
<body>
    <section class="container-fluid m-5 p-5">
        <div class="row">
            <div class="col-6 offset-3">

            <div class="container card p-4">
                <form action="" method="POST">
                  <div class="mb-3 row">
                    <label for="inputName" class="col-4 col-form-label">Ingrese usuario</label>
                    <div class="col-8">
                      <input type="text" class="form-control" name="inputName" placeholder="Name">
                    </div>
                  </div>

                  <div class="mb-3 row">
                    <label for="inputPassword" class="col-4 col-form-label">Ingrese contraseña</label>
                    <div class="col-8">
                      <input type="password" class="form-control" name="inputPassword" >
                    </div>
                  </div>

                  <?php
                  if(isset($_POST)) {
                    session_start();
                    if(!empty($_POST['inputName']) && !empty($_POST['inputPassword'])) {
                      $conexion = mysqli_connect("localhost", "root", "", "base1") or
                        die("Problemas con la conexión");
  
                      $registros = mysqli_query($conexion, "select nombre, mail, contraseña
                                              from alumnos where mail='$_REQUEST[inputName]'") or
                        die("Problemas en el select:" . mysqli_error($conexion));
  
                      if ($reg = mysqli_fetch_array($registros)) {
                        $_SESSION['usuario'] = $reg['nombre'];
                        if($_REQUEST['inputPassword'] == $reg['contraseña']){
                          header("location: menu.php");
  
                        }
                        else{
                          echo "Datos incorrectos ";
                        }
                      }
                      else {
                        echo "Datos incorrectos ";
  
                      }   
                    }
                  }                                      
                  ?>                  
                  
                  <div class="mb-3 row">
                    <div class="offset-sm-4 col-sm-8">
                      <button type="submit" class="btn btn-primary">Ingresar</button>
                    </div>
                  </div>
                </form>
                <form action="alumnos/RegAlum.php" method="post">
                  <div class="mb-3 row">
                    <div class="offset-sm-4 col-sm-8">
                      <button type="submit" class="btn btn-primary">Registrarse</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
        </div>

    </section>
    
    <script src="public/js/bootstrap.bundle.min.js"></script>
</body>
</html>