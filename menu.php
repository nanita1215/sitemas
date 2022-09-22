<?php 
session_start();
if(isset($_GET['close'])){
  unset($_SESSION['usuario']);    
}

if(isset($_POST['radio'])){
  if ($_REQUEST['radio'] == "rojo")
    setcookie("color", "#ff000040", time() + 60 * 60 * 24 * 365, "/");
  elseif ($_REQUEST['radio'] == "verde")
    setcookie("color", "#00ff0040", time() + 60 * 60 * 24 * 365, "/");
  elseif ($_REQUEST['radio'] == "azul")
    setcookie("color", "#0000ff", time() + 60 * 60 * 24 * 365, "/");
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
<style>
  div.col {
    height: 150px;
  }
</style>
<body <?php if (isset($_COOKIE['color'])) echo " style=\"background:$_COOKIE[color]\"" ?><?php if (isset($_COOKIE['color'])) echo " style=\"background:$_COOKIE[color]\"" ?>>
  
  <section class="container-fluid p-5 my-5">
    <!-- este sera el header -->
      <div class="row">
        <div class="col">
          <?php
        if(isset( $_SESSION['usuario'] )) {
          echo "<h3>Bienvenido " . $_SESSION['usuario'] . "</h3>"; 
        } else {
          header("location: index.php");
        }
        ?></div>
        <div class="col text-end"><button class="btn btn-info border-dark" type="button"> <a href="http://localhost:8080/menu.php?close=true">cerrar</a> </button></div>
      </div>


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
        <!-- aqui termina la primera fila  -->
      

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
                  <h4 class="card-title">Consultar <br>  usuario por email</h4>
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
                  <!-- <a href="reset.php" class="btn btn-info" disabled >Ir</a> -->
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
        </div>  
          <!-- aqui termina la segunda fila  -->


        <div class="row m-5"> 
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
                  <a href="alumnos/deleteReg.php" class="btn btn-info" >Ir</a>
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
                  <h4 class="card-title">Imagen <br>  </h4>
                </div>
              </div>
              <div class="row">
                <div class="card-body d-flex align-items-center justify-content-center">
                  <a href="imagen.php" class="btn btn-info" >Ir</a>
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
                  <h4 class="card-title">Validar  <br> Fecha  </h4>
                </div>
              </div>
              <div class="row">
                <div class="card-body d-flex align-items-center justify-content-center">
                  <a href="fecha1.php" class="btn btn-info" >Ir</a>
                </div>
              </div>
            </div>
          </div>    

          <div class="col-3">
            <div class="card border-dark ">
              <div class="row">
                <div class="col " >
                  <i class="bi bi-person-lines-fill  "></i>
                </div>
                <div class="col h-1">
                  <h4 class="card-title">Color pagina <br>  </h4>
                </div>
              </div>
              <div class="row">
                <div class="card-body d-flex align-items-center justify-content-center">
                <form action="" method="post">
                  Seleccione de que color desea que sea la página de ahora en más:<br>
                  <input type="radio" value="rojo" name="radio">Rojo<br>
                  <input type="radio" value="verde" name="radio">Verde<br>
                  <input type="radio" value="azul" name="radio">Azul<br>
                  <input type="submit" value="Crear cookie">
                </form>
                </div>
              </div>
            </div>
          </div>  
        </div>
      
        
    
        
  </section>
  <script src="public/js/bootstrap.bundle.min.js"></script>
</body>
</html>