<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/reportes.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>

<body>
    <div class="boxPadre">

        <?php include("php/fm_conexion.php"); ?>

        <div class="boxIzquierda boxInformacion">
            <div class="registroLargo estados">
                <p>Busqueda:</p>
                <!--Funcion onkeyup -->
                <input onkeyup="filtroBusqueda($('#buscadorFiltro').val(),$('input:radio[name=estado]:checked').val());"
                    type="text" id="buscadorFiltro" name="buscar">
                <p>Estado:</p>
                <label class="content-input todo" for="todo">
                    <input type="radio" name="estado" id="todo" value=""
                        onclick="filtroBusqueda($('#buscadorFiltro').val(),$('input:radio[name=estado]:checked').val());"
                        checked>Todos
                    <i></i>
                </label>
                <label class="content-input aceptado" for="aceptado">
                    <input type="radio" name="estado" id="aceptado" value="aceptado"
                        onclick="filtroBusqueda($('#buscadorFiltro').val(),$('input:radio[name=estado]:checked').val());">Aceptado
                    <i></i>
                </label>
                <label class="content-input archivado" for="archivado">
                    <input type="radio" name="estado" id="archivado" value="archivado"
                        onclick="filtroBusqueda($('#buscadorFiltro').val(),$('input:radio[name=estado]:checked').val());">Archivado
                    <i></i>
                </label>
                <label class="content-input rechazado" for="rechazado">
                    <input type="radio" name="estado" id="rechazado" value="rechazado"
                        onclick="filtroBusqueda($('#buscadorFiltro').val(),$('input:radio[name=estado]:checked').val());">Rechazado
                    <i></i>
                </label>
            </div>

            <div class="resultsBusqueda">
                <table class="tableDatos" cellspacing="0" id="filtroFm">
                    <tr class="principal">
                        <th>ID</th>
                        <th>Nombres</th>
                        <th>Apellido</th>
                        <th>Cargo</th>
                        <th>Celular</th>
                        <th>Correo</th>
                        <th>Nombre Municipio</th>
                    </tr>
                    <?php

                    $sql = "SELECT idPerson, nombres, apellidos, cargo, celular, correo, nombreMunicipio, estado FROM registros ";
                    $cQuery = mysqli_query($enlace,$sql);
                    while($mostrar = mysqli_fetch_row($cQuery)){?>

                    <tr class="<?php echo $mostrar['7']?>">
                        <td><?php echo $mostrar['0']?></td>
                        <td><?php echo $mostrar['1']?></td>
                        <td><?php echo $mostrar['2']?></td>
                        <td><?php echo $mostrar['3']?></td>
                        <td><?php echo $mostrar['4']?></td>
                        <td><?php echo $mostrar['5']?></td>
                        <td><?php echo $mostrar['6']?></td>
                    </tr>
                    <?php }?>
                </table>
            </div>
        </div>
        <div>

        </div>
        <script type="text/javascript">
        function filtroBusqueda(buscar, estado) {
            var parametros = {
                "buscar": buscar,
                "estados": estado
            };
            $.ajax({
                data: parametros,
                type: 'POST',
                url: 'php/rep_busDatoE.php',
                success: function(data) {
                    document.getElementById("filtroFm").innerHTML = data;
                }
            });
        }
        //   buscar_ahora();
        </script>


        <a class="regresar" href="opFemult.php">
            <div>
                <p>Volver</p>
            </div>
        </a>

</body>

</html>