<head>
  <title>Problema</title>
  <link rel="stylesheet" href="../public/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>


<section class="container-fluid m-5 p-5">
        <div class="row">
            <div class="col">

              <div class="container card p-4">
                  <form action="envioCursos.php" method="POST" >
                    <h2>Alta de Cursos</h2>
                    <div class="mb-3 row">
                      <label for="nombre" class="col-4 col-form-label">Ingrese el nombre del curso: </label>
                      <div class="col-8">
                        <input type="text" class="form-control" name="nombrecurso" placeholder="Nombre del curso" required>
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
        </div>
              <!-- Contenido de la tarjeta  -->
</section>    
    <script src="../public/js/bootstrap.bundle.min.js"></script>
</body>

</html>