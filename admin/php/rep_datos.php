<?php



$jSon = "
{
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
}";

echo $jSon;
?>