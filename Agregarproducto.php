<!DOCTYPE html>
<html lang="es">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/Torre.css" type="text/css">
    <div class="navigation">
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
    </div>
    </nav>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<header>
    <div class="container">
        <div class="row justify-content-between mb-5">
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <h1><a class="navbar-brand" href="index.php">Listado de Productos</a></h1>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div>
    </div>
    <style>
        body {
            background-image: url("IMG/Fondo.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</header>
<div class="Contenedoor">

    <body>
        <div class="container-fluid vh-100 d-flex flex-column ">

            <head>

                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width, initial-scale=1.0">

                <div class="contenedor">
                    <div class="titulo">
                        <a href="index.php"><img src="IMG/productos.png" height="40 px"></a> Agregar
                        Producto
                    </div>

            </head>

            <body>
                <div class="contenedor">

                    <form id="agregarForm" action="Agregar_producto.php" method="POST" class="formulario" enctype="multipart/form-data">
                        <div class="card-body">
                            <input type="text" class="form-control mb-3" name="codigo" placeholder="Codigo de barra o ID">
                            <input type="text" class="form-control mb-3" name="producto" placeholder="Producto">
                            <input type="text" class="form-control mb-3" name="descripcion" placeholder="Descripción">
                            <input type="text" class="form-control mb-3" name="stock" placeholder="Stock">
                            <label for="">Foto de Producto:</label>
                            <input type="file" name="imagen" id="imagen">
                            <br>
                            <br>
                            <input type="submit" class="btn btn-primary btn-block" value="Agregar" id="submitBtn" style="background-color: darkgreen; font-weight: bold;">
                        </div>

                    </form>
                </div>

        </div>
    </body>
</div>
</div>
</body>

</html>
