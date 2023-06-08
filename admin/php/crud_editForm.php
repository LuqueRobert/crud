<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../css/general.css">
</head>

<body>
    <div class="boxDerecha boxRegistros">
        <form action="crud_editar.php" method="post">
            <?php
                include("crud_busDatoE.php");
            ?>
            <Input class="invisible" type="text" name="idPerson" value="<?php echo "$dato[0]";?>"></Input>
            <h4>Representante Legal</h4>
            <div class="registroLargo">
                <p>Nombres:</p>
                <Input type="text" name="nombre" value="<?php echo "$dato[1]";?>"></Input>
            </div>
            <div class="registroLargo">
                <p>Apellidos:</p>
                <Input type="text" name="apellido" value="<?php echo "$dato[2]";?>"></Input>
            </div>

            <div class="registroCorto">
                <p>Cargo:</p>
                <Input type="text" name="cargo" value="<?php echo "$dato[3]";?>"></Input>
                <p class="segundo">Celular:</p>
                <Input type="number" name="cell" value="<?php echo "$dato[4]";?>"></Input>
            </div>
            <div class="registroLargo">
                <p>Correo:</p>
                <Input type="text" name="correo" value="<?php echo "$dato[5]";?>"></Input>
            </div>

            <h4>Datos de Municipalidad</h4>
            <div class="registroLargo">
                <p>Nombre de Municipio:</p>
                <Input type="text" name="nombreMunicipio" value="<?php echo "$dato[6]";?>"></Input>
            </div>
            <div class="registroLargo">
                <p>Dirección:</p>
                <Input type="text" name="direccion" value="<?php echo "$dato[7]";?>"></Input>
            </div>
            <div class="registroCorto">
                <p>Distrito:</p>
                <Input type="text" name="distrito" value="<?php echo "$dato[8]";?>"></Input>
                <p class="segundo">Provincia:</p>
                <Input type="text" name="provincia" value="<?php echo "$dato[9]";?>"></Input>
            </div>
            <div class="registroCorto">
                <p>Región:</p>
                <Input type="text" name="region" value="<?php echo "$dato[10]";?>"></Input>
                <p class="segundo">Teléfono:</p>
                <Input type="number" name="telefono" value="<?php echo "$dato[11]";?>"></Input>
            </div>
            <div class="registroLargo">
                <p>Correo:</p>
                <Input type="text" name="correoMunicipal" value="<?php echo "$dato[12]";?>"></Input>
            </div>
            <div class="registroLargo">
                <p>Página Web:</p>
                <Input type="text" name="paginaWeb" value="<?php echo "$dato[13]";?>"></Input>
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
                <script>
                document.querySelector("[name=estado][value=<?php echo "$dato[14]";?>]").checked = true;
                </script>
            </div>

            <div class="registroLargo">
                <input class="btnGuardar" type="submit" value="Guardar">
                <a class="btnCancelar" href="../registrarPersonal.php">Cancelar</a>
            </div>

        </form>
    </div>
    </div>
</body>

</html>