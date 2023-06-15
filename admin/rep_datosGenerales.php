<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/rep_datosG.css">
</head>

<body>

    <?php include("php/fm_conexion.php"); ?>
    <?php
                    $sqlAceptado = "SELECT COUNT(*) totalAceptados FROM registros WHERE estado LIKE 'aceptado'";
                    $aceptado = mysqli_query($enlace,$sqlAceptado);
                    $filasAceptado = mysqli_fetch_assoc($aceptado);

                    $sqlArchivado = "SELECT COUNT(*) totalArchivados FROM registros WHERE estado LIKE 'archivado'";
                    $archivado = mysqli_query($enlace,$sqlArchivado);
                    $filasArchivado = mysqli_fetch_assoc($archivado);

                    $sqlRechazado = "SELECT COUNT(*) totalRechazados FROM registros WHERE estado LIKE 'rechazado'";
                    $rechazado = mysqli_query($enlace,$sqlRechazado);
                    $filasRechazado = mysqli_fetch_assoc($rechazado);

                    $total = $filasAceptado['totalAceptados'] + $filasArchivado['totalArchivados'] + $filasRechazado['totalRechazados'];
                    $eficacia =  ($filasAceptado['totalAceptados'] / $total) * 100;
                    ?>
    <script>
    var aceptado = <?php echo $filasAceptado['totalAceptados']?>;
    var archivado = <?php echo $filasArchivado['totalArchivados']?>;
    var rechazado = <?php echo $filasRechazado['totalRechazados']?>;
    </script>



    <div class="grafico">
        <canvas id="graficoEficacia"></canvas>
        <table class="datosInfo">
            <tr>
                <td>Total De Personas:</td>
                <td><?php echo $total?></td>
            </tr>
            <tr>
                <td>Nivel de Eficacia:</td>
                <td><?php echo round($eficacia, 2)  . "%"?></td>
            </tr>
    </div>

    <!--COMIENZO DEL GRAFICO-->
    <script>
    var ctx = document.getElementById('graficoEficacia');
    Chart.defaults.color = '#FFFFFF';
    new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Aceptado', 'Archivado', 'Rechazado'],
            datasets: [{
                label: 'Personas',
                data: [aceptado, archivado, rechazado],
                backgroundColor: [
                    '#69FF43',
                    '#FDEC54',
                    '#FF665C'
                ],
                borderWidth: 1
            }]
        }
    });
    </script>
    <!--FIN DEL GRAFICO-->




</body>

</html>