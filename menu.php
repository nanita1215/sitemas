<?php 
session_start();
if(isset( $_SESSION['usuario'] )) {
  echo "Bienvenido " . $_SESSION['usuario'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="public/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <title>Menu</title>
</head>
<body>
  <section class="container-fluid p-5 my-5">
        <!-- inicia la primera fila  -->
      <div class="row m-5" > 
        <!-- contenido primera fila -->
        <div class="col-3">
          <!-- modelo tarjeta  -->
          <div class="card border-dark container-fluid">
            <div class="row">
              <div class="col">
                <i class="bi bi-person-lines-fill  "></i>
              </div>
              <div class="col">
                <h4 class="card-title">Registrar alumno</h4>
              </div>
            </div>
            <div class="row">
              <div class="card-body d-flex align-items-center justify-content-center">
                <a href="alumnos/RegAlum.php" class="btn btn-info" >Ir</a>
              </div>
            </div>
          </div>

        </div>

        
        <div class="col-3">
          <!-- modelo tarjeta 2 -->
          <div class="card border-dark container-fluid">
            <div class="row">
              <div class="col">
                <!-- este es el icono -->
                <i class="bi bi-journal-bookmark"></i>
              </div>
              <div class="col">
                <h4 class="card-title">Registrar <br> Curso</h4>
              </div>
            </div>
            <div class="row">
              <div class="card-body d-flex align-items-center justify-content-center">
                <a href="curso/RegCurso.php" class="btn btn-info" >Ir</a>
              </div>
            </div>
          </div>

        </div>
        
        <div class="col-3">
          <!-- modelo tarjeta 3 -->
          <div class="card border-dark container-fluid">
            <div class="row">
              <div class="col">
                <i class="bi bi-person-lines-fill  "></i>
              </div>
              <div class="col">
                <h4 class="card-title">Ver <br> Cursos</h4>
              </div>
            </div>
            <div class="row">
              <div class="card-body d-flex align-items-center justify-content-center">
                <a href="curso/tablaCursos.php" class="btn btn-info" >Ir</a>
              </div>
            </div>
          </div>

        </div>
        <div class="col-3">
          <!-- modelo tarjeta 4 -->          
          <div class="card border-dark container-fluid">
            <div class="row">
              <div class="col">
                <i class="bi bi-person-lines-fill  "></i>
              </div>
              <div class="col">
                <h4 class="card-title">Ver <br> alumnos</h4>
              </div>
            </div>
            <div class="row">
              <div class="card-body d-flex align-items-center justify-content-center">
                <a href="alumnos/tablaAlumnos.php" class="btn btn-info" >Ir</a>
              </div>
            </div>
          </div>

        </div>
      </div>

        <!-- Segunda Fila  -->
        <div class="row m-5" > 
          <!-- contenido segunda fila -->
          <div class="col-3">
            <!-- modelo tarjeta 1 -->
            <div class="card border-dark container-fluid">
              <div class="row">
                <div class="col">
                  <i class="bi bi-person-lines-fill  "></i>
                </div>
                <div class="col">
                  <h4 class="card-title">Consultar usuario <br>  email </h4>
                </div>
              </div>
              <div class="row">
                <div class="card-body d-flex align-items-center justify-content-center">
                  <a href="emailSearch.php" class="btn btn-info" >Ir</a>
                </div>
              </div>
            </div>
  
          </div>
  
          
          <div class="col-3">
            <!-- modelo tarjeta 2 -->
            <div class="card border-dark container-fluid">
              <div class="row">
                <div class="col">
                  <!-- este es el icono -->
                  <i class="bi bi-journal-bookmark"></i>
                </div>
                <div class="col">
                  <h4 class="card-title">Eliminar usuario por email</h4>
                </div>
              </div>
              <div class="row">
                <div class="card-body d-flex align-items-center justify-content-center">
                  <a href="deleteReg.php" class="btn btn-info" >Ir</a>
                </div>
              </div>
            </div>
  
          </div>
          
          <div class="col-3">
            <!-- modelo tarjeta 3 -->
            <div class="card border-dark container-fluid">
              <div class="row">
                <div class="col">
                  <i class="bi bi-person-lines-fill  "></i>
                </div>
                <div class="col">
                  <h4 class="card-title">Reset</h4>
                </div>
              </div>
              <div class="row">
                <div class="card-body d-flex align-items-center justify-content-center">
                  <a href="reset.php" class="btn btn-info" >Ir</a>
                </div>
              </div>
            </div>
  
          </div>
          <div class="col-3">
            <!-- modelo tarjeta 4 -->            
            <div class="card border-dark container-fluid">
              <div class="row">
                <div class="col">
                  <i class="bi bi-person-lines-fill  "></i>
                </div>
                <div class="col">
                  <h4 class="card-title">Modificar <br> Email </h4>
                </div>
              </div>
              <div class="row">
                <div class="card-body d-flex align-items-center justify-content-center">
                  <a href="consultaCorreo1.php" class="btn btn-info" >Ir</a>
                </div>
              </div>
            </div>
  
          </div>        

          <!-- Inicio tercera fila  -->
          <div class="col-3">
            <!-- modelo tarjeta  -->
            <div class="card border-dark container-fluid">
              <div class="row">
                <div class="col">
                  <!-- este es el icono -->
                  <i class="bi bi-journal-bookmark"></i>
                </div>
                <div class="col">
                  <h4 class="card-title">Correos Antiguos</h4>
                </div>
              </div>
              <div class="row">
                <div class="card-body d-flex align-items-center justify-content-center">
                  <a href="consultaCorreoAntiguo.php" class="btn btn-info" >Ir</a>
                </div>
              </div>
            </div>
  
          </div>
          
          <div class="col-3">
            <div class="card border-dark container-fluid">
              <div class="row">
                <div class="col">
                  <i class="bi bi-person-lines-fill  "></i>
                </div>
                <div class="col">
                  <h4 class="card-title">Alumnos inscritos <br> por curso </h4>
                </div>
              </div>
              <div class="row">
                <div class="card-body d-flex align-items-center justify-content-center">
                  <a href="groupByInscritos.php" class="btn btn-info" >Ir</a>
                </div>
              </div>
            </div>
  
          </div>
          <div class="col-3">
            
            <div class="card border-dark container-fluid">
              <div class="row">
                <div class="col">
                  <i class="bi bi-person-lines-fill  "></i>
                </div>
                <div class="col">
                  <h4 class="card-title">Modificar <br> Email </h4>
                </div>
              </div>
              <div class="row">
                <div class="card-body d-flex align-items-center justify-content-center">
                  <a href="" class="btn btn-info" >Ir</a>
                </div>
              </div>
            </div>
  
          </div>        

          <div class="col-3">
            <!-- modelo tarjeta  -->
            <div class="card border-dark container-fluid">
              <div class="row">
                <div class="col">
                  <!-- este es el icono -->
                  <i class="bi bi-journal-bookmark"></i>
                </div>
                <div class="col">
                  <h4 class="card-title">Eliminar usuario por email</h4>
                </div>
              </div>
              <div class="row">
                <div class="card-body d-flex align-items-center justify-content-center">
                  <a href="deleteReg.php" class="btn btn-info" >Ir</a>
                </div>
              </div>
            </div>
  
          </div>
          
          <div class="col-3">
            <div class="card border-dark container-fluid">
              <div class="row">
                <div class="col">
                  <i class="bi bi-person-lines-fill  "></i>
                </div>
                <div class="col">
                  <h4 class="card-title">Reset</h4>
                </div>
              </div>
              <div class="row">
                <div class="card-body d-flex align-items-center justify-content-center">
                  <a href="reset.php" class="btn btn-info" >Ir</a>
                </div>
              </div>
            </div>
  
          </div>
          <div class="col-3">
            
            <div class="card border-dark container-fluid">
              <div class="row">
                <div class="col">
                  <i class="bi bi-person-lines-fill  "></i>
                </div>
                <div class="col">
                  <h4 class="card-title">Modificar <br> Email </h4>
                </div>
              </div>
              <div class="row">
                <div class="card-body d-flex align-items-center justify-content-center">
                  <a href="" class="btn btn-info" >Ir</a>
                </div>
              </div>
            </div>
  
          </div>        


          <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-info border-dark" type="button">Inicio</button>            
          </div>
        </div>
        
    
        
  </section>
  <script src="public/js/bootstrap.bundle.min.js"></script>
</body>
</html>