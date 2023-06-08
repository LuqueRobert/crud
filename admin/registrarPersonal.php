<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/registrarPersonal.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>

<body>
    <div class="boxPadre">

        <?php include("php/fm_conexion.php"); ?>

        <div class="boxIzquierda boxInformacion">
            <div class="registroLargo">
                <p>Busqueda:</p>
                <!--Funcion onkeyup -->
                <input onkeyup="filtroBusqueda($('#buscadorFiltro').val());" type="text" id="buscadorFiltro"
                    name="buscar">
            </div>
            <div class="resultsBusqueda">
                <table class="tableDatos" cellspacing="0" id="filtroFm">
                    <tr class="principal">
                        <th>ID</th>
                        <th>Nombres</th>
                        <th>Apellido</th>
                        <th>Cargo</th>
                        <th>Celular</th>
                        <th>Acciones</th>
                    </tr>
                    <?php

                    $sql = "SELECT idPerson, nombres, apellidos, cargo, celular, estado FROM registros ";
                    $cQuery = mysqli_query($enlace,$sql);
                    while($mostrar = mysqli_fetch_row($cQuery)){?>

                    <tr class="<?php echo $mostrar['5']?>">
                        <td><?php echo $mostrar['0']?></td>
                        <td><?php echo $mostrar['1']?></td>
                        <td><?php echo $mostrar['2']?></td>
                        <td><?php echo $mostrar['3']?></td>
                        <td><?php echo $mostrar['4']?></td>
                        <td class="btnAcciones">
                            <a class="btnCambio" href="php/crud_editForm.php? id=<?php echo $mostrar['0']?>">
                                <svg width="20" height="20" viewBox="0 0 24 24" style="fill: black">
                                    <path
                                        d="M19.045 7.401c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.378-.378-.88-.586-1.414-.586s-1.036.208-1.413.585L4 13.585V18h4.413L19.045 7.401zm-3-3 1.587 1.585-1.59 1.584-1.586-1.585 1.589-1.584zM6 16v-1.585l7.04-7.018 1.586 1.586L7.587 16H6zm-2 4h16v2H4z">
                                    </path>
                                </svg>
                            </a>

                            <a class="btnDelete" href="php/crud_eliminarRegistro.php? id=<?php echo $mostrar['0']?>">
                                <svg width="20" height="20" viewBox="0 0 24 24" style="fill: black">
                                    <path
                                        d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z">
                                    </path>
                                    <path d="M9 10h2v8H9zm4 0h2v8h-2z"></path>
                                </svg>

                            </a>
                        </td>
                    </tr>
                    <?php }?>
                </table>
            </div>
        </div>
        <div>

        </div>
        <script type="text/javascript">
        function filtroBusqueda(buscar) {
            var parametros = {
                "buscar": buscar
            };
            $.ajax({
                data: parametros,
                type: 'POST',
                url: 'php/fm_filtro.php',
                success: function(data) {
                    document.getElementById("filtroFm").innerHTML = data;
                }
            });
        }
        //   buscar_ahora();
        </script>

        <div class="boxDerecha boxRegistros">
            <form action="php/fm_registroSystem.php" method="post">

                <h4>Representante Legal</h4>
                <div class="registroLargo">
                    <p>Nombres:</p>
                    <Input type="text" name="nombre"></Input>
                </div>
                <div class="registroLargo">
                    <p>Apellidos:</p>
                    <Input type="text" name="apellido"></Input>
                </div>

                <div class="registroCorto">
                    <p>Cargo:</p>
                    <Input type="text" name="cargo"></Input>
                    <p class="segundo">Celular:</p>
                    <Input type="number" name="cell"></Input>
                </div>
                <div class="registroLargo">
                    <p>Correo:</p>
                    <Input type="text" name="correo"></Input>
                </div>

                <h4>Datos de Municipalidad</h4>
                <div class="registroLargo">
                    <p>Nombre de Municipio:</p>
                    <Input type="text" name="nombreMunicipio"></Input>
                </div>
                <div class="registroLargo">
                    <p>Dirección:</p>
                    <Input type="text" name="direccion"></Input>
                </div>
                <div class="registroCorto">
                    <p>Distrito:</p>
                    <Input type="text" name="distrito"></Input>
                    <p class="segundo">Provincia:</p>
                    <Input type="text" name="provincia"></Input>
                </div>
                <div class="registroCorto">
                    <p>Región:</p>
                    <Input type="text" name="region"></Input>
                    <p class="segundo">Teléfono:</p>
                    <Input type="number" name="telefono"></Input>
                </div>
                <div class="registroLargo">
                    <p>Correo:</p>
                    <Input type="text" name="correoMunicipal"></Input>
                </div>
                <div class="registroLargo">
                    <p>Página Web:</p>
                    <Input type="text" name="paginaWeb"></Input>
                </div>

                <div class="registroLargo estados">
                    <p>Página Web:</p>
                    <label class="content-input aceptado" for="aceptado">
                        <input type="radio" name="estado" id="aceptado" value="aceptado">Aceptado
                        <i></i>
                    </label>
                    <label class="content-input archivado" for="archivado">
                        <input type="radio" name="estado" id="archivado" value="archivado">Archivado
                        <i></i>
                    </label>
                    <label class="content-input rechazado" for="rechazado">
                        <input type="radio" name="estado" id="rechazado" value="rechazado">Rechazado
                        <i></i>
                    </label>

                </div>

                <div class="registroLargo">
                    <input class="btnGuardar" type="submit" value="Guardar">
                </div>

            </form>
        </div>
    </div>
    <a class="regresar" href="opFemult.php">
        <div>
            <p>Volver</p>
        </div>
    </a>

</body>

</html>