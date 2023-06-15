<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/femulp.css">
    <title>Document</title>
</head>

<body>

    <h1>DECLARACION DE ADHEDHESION</h1>
    <div class="boxPadre">
        <div class="boxIzquierda boxRegistros">
            <form action="php/registros.php" method="post" autocomplete="off">
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

                <div class="registroLargo">
                    <input class="btnRegistrar" type="submit" value="Registrarse">
                </div>
            </form>
        </div>
        <div class="boxDerecha boxInformacion">
            <h2>El Alcalde deberá presentar posteriormente un Acuerdo de Concejo Municipal</h2>
            <h3>Declaración Jurada:</h3>
            <p>Yo, el Alcalde, declaro formalmente la adhesión de la Municipalidad de la que soy representante legal a
                la Federación de Municipios Libres del Perú-FEMULP, suscribiendo su Manifiesto Fundacional, Estatutos y
                comprometiéndome a participar en sus actividades y sostenibilidad institucional.</p>
            <p>Remitir a FEMULP con sello y firma.</p>
            <p>
                <FONT COLOR="red">NOTA IMPORTANTE:</FONT> No olvide enviar a FEMULP su Acuerdo de Concejo
                Municipal y su Credencial de Alcalde.
            </p>
        </div>
    </div>
    <a class="regresar" href="opFemult.php">
        <div>
            <p>Volver</p>
        </div>
    </a>
</body>

</html>