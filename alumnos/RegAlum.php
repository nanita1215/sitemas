


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../public/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <title>Template</title>
  <style>
    .square {
      width: 700px;
      background: red ;
    }
  </style>
</head>
<body>
    <section class="container-fluid m-5 p-5">
        <div class="row">
            <div class="col">

              <div class="container card p-4">
                  <form action="envioAlumnos.php" method="POST" >
                    <h2>Alta de Alumnos</h2>
                    <div class="mb-3 row">
                      <label for="nombre" class="col-4 col-form-label">Ingrese su nombre</label>
                      <div class="col-8">
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre completo aquí">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="mail" class="col-4 col-form-label">Ingrese mail</label>
                      <div class="col-8">
                        <input type="text" class="form-control" name="mail" placeholder="Su correo aquí">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="contraseña" class="col-4 col-form-label">Ingrese contraseña</label>
                      <div class="col-8">
                        <input type="password" class="form-control" name="contraseña" placeholder="Contraseña segura">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="date" class="col-4 col-form-label">Ingrese fecha de nacimiento</label>
                      <div class="col-8">
                        <input type="date" class="form-control" name="date">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="inputName" class="col-4 col-form-label">Seleccione curso</label>
                      <div class="col-8">
                        <div class="mb-3">
                          
                          <select class="form-control" name="codigocurso" id="">
                          <?php
                            $conexion = mysqli_connect("localhost", "root", "", "base1") or
                            die("Problemas con la conexión");
                              
                            $registros = mysqli_query($conexion, "select * from cursos ") or
                            die("Problemas en el select:" . mysqli_error($conexion));
                            while ($reg = mysqli_fetch_array($registros)){
                              echo "<option value = $reg[codigo]>$reg[nombrecurso]</option>";
                            }
                          ?>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <div class="offset-sm-4 col-sm-8">
                        <button type="submit" class="btn btn-primary">Registrar</button>
                      </div>
                    </div>
                  </form>

                  <form action="../menu.php">                    
                    <button type="submit" class="btn btn-primary">Inicio</button>
                  </form>
                </div>
              </div>
              <!-- Contenido de la tarjeta  -->
              
                                
                  
              </section>    
        
  
  <script src="../public/js/bootstrap.bundle.min.js"></script>
</body>
</html>

