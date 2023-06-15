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

        <div class="boxIzquierda boxInformacion">


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
                        <th>Direccion</th>
                        <th>Distrito</th>
                        <th>Provincia</th>
                        <th>Region</th>
                        <th>Telefono</th>
                        <th>Correo Municipal</th>
                        <th>Pagina Web</th>
                    </tr>
                    <?php

                    $sql = "SELECT * FROM registros ";
                    $cQuery = mysqli_query($enlace,$sql);
                    while($mostrar = mysqli_fetch_row($cQuery)){?>

                    <tr class="<?php echo $mostrar['14']?>">
                        <td><?php echo $mostrar['0']?></td>
                        <td><?php echo $mostrar['1']?></td>
                        <td><?php echo $mostrar['2']?></td>
                        <td><?php echo $mostrar['3']?></td>
                        <td><?php echo $mostrar['4']?></td>
                        <td><?php echo $mostrar['5']?></td>
                        <td><?php echo $mostrar['6']?></td>
                        <td><?php echo $mostrar['7']?></td>
                        <td><?php echo $mostrar['8']?></td>
                        <td><?php echo $mostrar['9']?></td>
                        <td><?php echo $mostrar['10']?></td>
                        <td><?php echo $mostrar['11']?></td>
                        <td><?php echo $mostrar['12']?></td>
                        <td><?php echo $mostrar['13']?></td>
                    </tr>
                    <?php }?>

                </table>
            </div>

            <div class="grafico">
                <table class="datosInfo">
                    <tr>
                        <td>Total De Personas:</td>
                        <td>14</td>
                    </tr>
                    <tr>
                        <td>Nivel de Eficacia:</td>
                        <td>15</td>
                    </tr>
                </table>
            </div>
        </div>



        <!--
        <div class="excel">
            <input type="submit" value="Realizar
            Reporte en excel"
                onclick="enviarDatos($('#buscadorFiltro').val(),$('input:radio[name=estado]:checked').val());"></input>
        </div>
    -->
        <div class="boxButtons">
            <a class="datosGenerales" href="rep_datosGenerales.php">
                <div>
                    <p>Datos Generales</p>
                </div>
            </a>
            <a class="datosGenerales" href="generarDatos.php">
                <div>
                    <p>Genarar Datos</p>
                </div>
            </a>
        </div>

        <a class="regresar" href="opFemult.php">
            <div>
                <p>Volver</p>
            </div>
        </a>
        <div id="resultado">

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
        </script>

</body>

</html>