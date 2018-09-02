<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>CodigoWebLibre | Generar PDF con PHP  sin librerias</title>
  </head>
  <body>
  	<div class="container">
      <div class="row">
        <div class="col">
          &nbsp;
        </div>
      </div>
      <div class="row text-center">
        <div class="col">
          <h1>
            <a href="http://codigoweblibre.blogspot.com/" target="_blank">
              codigoweblibre.blogspot.com
              <i class="material-icons">web</i>
            </a>
          </h1>
          <h1>
            <a href="https://www.youtube.com/user/codigoweblibre" target="_blank">
              YouTube: codigoweblibre
              <i class="material-icons">video_library</i>
            </a>
          </h1>
        </div>
      </div>

      <div class="row">
        <div class="col">
          &nbsp;
        </div>
      </div>

      <div class="row">
        <div class="col">
          <h3>Generar Excel con informacion de base de datos en PHP sin librerias</h3>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <p>
            Modificar cabecera para generar salida en archivo excel.
            <pre>
              <code>
                header("Content-Type:application/xls");
                header("Content-Disposition: attachment; filename=nombre_archivo.xls");
              </code>
            </pre>
          </p>
        </div>
      </div>

      <div class="row">
        <div class="col text-center">
          <a href="pdf.php">
            Generar XLS
          </a>
        </div>
      </div>
  	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>