<?php
include("recibir.php");
$sql = "SELECT * FROM listado";
$query = mysqli_query($conexion, $sql);
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTTXf0+2sFf4s5D14JfWDp5FRvCTT9x5G/C8z7ThFJ8alO/l4Gx95DU3nHJyA+swb8D1Y+ZK5Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/listado_usuarios.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .titulo {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .subtitulo {
            font-size: 20px;
            margin-bottom: 20px;
        }

        .boton-agregar {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
        }

        .boton-agregar:hover {
            background-color: #0056b3;
        }

        .imagen-producto {
            width: 50px;
            height: 50px;
            border-radius: 2px;
            cursor: pointer;
        }

        .tabla-margen {
            border: 3px solid cadetblue;
            border-radius: 2px;
            padding: 20px;
            overflow-x: auto;
            /* Agrega desplazamiento horizontal */
            position: relative;
            min-width: 100%;
            /* Ancho mínimo para evitar que se corte */
        }

        .barra-superior {
            background-color: #171111;
            color: #fff;
            padding: 5px;
            font-size: 14px;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            text-align: left;
        }

        .celda-margen {
            border: 2px solid #ccc;
            padding: 10px;
            word-wrap: break-word;
        }

        /* Estilos para el menú lateral */
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #171111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
            border-top: 1px solid white;
            /* Línea blanca superior */
            border-bottom: 1px solid white;
            /* Línea blanca inferior */
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
            border: none;
            /* Elimina el borde del botón */
            color: white;
            /* Cambia el color del icono a blanco */
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }
    </style>
</head>

<body>
    <div class="sidenav" id="mySidenav">
        <!-- Agregar la imagen del logo aquí -->
        <img src="IMG/KDTSoft.jpg" alt="Logo" style="width: 200px; margin-top: 0px; margin-left: 20px;">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#"><img src="IMG/checklist.png"> Listado</a>
    </div>

    <span style="font-size:30px;cursor:pointer; color: #111;" onclick="openNav()">&#9776; Menu</span>

    <div class="container mt-5">
        <div class="tabla-margen">
            <div class="barra-superior">
                Listado de productos
                <!-- Barra de búsqueda -->
                <input type="text" id="searchInput" placeholder="Buscar..." onkeyup="search()" style="margin-top: 10px; width: 300px;">
            </div>

            <!-- Botón Agregar -->
            <br>
            <br>
            <button class="btn btn-success btn-lg" style="font-size: 12px; background-color: #111; border-radius: 4px" onclick="location.href='AgregarProducto.php'">
                <img src="IMG/Add.png" alt="Icono de agregar" style="width: 20px; height: auto; margin-right: 5px;"> Agregar
            </button>

            <table id="tablaProductos" class="table table-striped" style="margin-top: 40px; min-width: 100%;">
                <thead>
                    <br>
                    <tr>
                        <th scope="col">Foto</th>
                        <th scope="col">Código</th>
                        <th scope="col">Producto</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_array($query)) { ?>
                        <tr>
                            <td class="celda-margen">
                                <img src="<?php echo $row['Imagen'] ?>" alt="Producto" class="imagen-producto" onclick="mostrarImagen('<?php echo $row['Imagen'] ?>')">
                            </td>
                            <td class="celda-margen"><?php echo $row['Codigo'] ?></td>
                            <td class="celda-margen"><?php echo $row['Producto'] ?></td>
                            <td class="celda-margen"><?php echo $row['Descripcion'] ?></td>
                            <td class="celda-margen"><?php echo $row['Stock'] ?></td>
                            <td class="celda-margen">
                                <a href="EditarTorres.php?ID=<?php echo $row['ID'] ?>" class="btn btn-primary btn-sm">Editar</a>
                                <a href="Eliminarproducto.php?ID=<?php echo $row['ID'] ?>" class="btn btn-danger btn-sm">Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>


    <!-- Modal para mostrar la imagen -->
    <div class="modal fade" id="imagenModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="" id="imagenGrande" alt="Imagen grande" style="max-width: 100%; max-height: 80vh;">
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }

        function mostrarImagen(rutaImagen) {
            document.getElementById('imagenGrande').src = rutaImagen;
            $('#imagenModal').modal('show');
        }

        function search() {
            // Obtiene el valor del campo de búsqueda
            var searchText = document.getElementById("searchInput").value.toUpperCase();

            // Obtiene todas las filas de la tabla
            var rows = document.querySelectorAll("#tablaProductos tbody tr");

            // Itera sobre cada fila y muestra u oculta según el texto de búsqueda
            rows.forEach(function(row) {
                var codigo = row.cells[1].innerText.toUpperCase(); // Obtén el texto del código de producto
                var producto = row.cells[2].innerText.toUpperCase(); // Obtén el texto del nombre de producto

                // Comprueba si el texto de búsqueda está presente en el código o el nombre del producto
                if (codigo.indexOf(searchText) > -1 || producto.indexOf(searchText) > -1) {
                    row.style.display = ""; // Muestra la fila si se encuentra una coincidencia
                } else {
                    row.style.display = "none"; // Oculta la fila si no hay coincidencia
                }
            });
        }
    </script>
</body>

</html>