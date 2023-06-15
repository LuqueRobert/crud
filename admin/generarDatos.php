<?php
    for($i = 0 ; $i <= 100; $i++){
        $numberRand=rand(1,3);

        switch ($numberRand) {
            case 1:
                $estado = "aceptado";
                break;
            case 2:
                $estado = "archivado";
                break;
            case 3:
                $estado = "rechazado";
                break;
        }

        $numberAnio=rand(1,4);

        switch ($numberRand) {
            case 1:
                $anio = 2020;
                break;
            case 2:
                $anio = 2021;
                break;
            case 3:
                $anio = 2022;
                break;
            case 4:
                $anio = 2023;
                break;
        }

        $numberMes=rand(1,12);
        if($numberMes < 10){
            $numberMes = "0$numberMes";
        }
        $numberDia=rand(1,28);
        if($numberDia < 10){
            $numberDia = "0$numberDia";
        }

        $numberHoras = rand(1,23);
        if($numberHoras < 10){
            $numberHoras = "0$numberHoras";
        }

        $numberMinutos = rand(1,50);
        if($numberMinutos < 10){
            $numberMinutos = "0$numberMinutos";
        }

        $numberSegundos=rand(1,50);
        if($numberSegundos < 10){
            $numberSegundos = "0$numberSegundos";
        }


        $fecha = "$anio-$numberMes-$numberDia $numberHoras:$numberMinutos:$numberSegundos";

        echo "INSERT INTO `registros`(`idPerson`, `nombres`, `apellidos`, `cargo`, `celular`, `correo`, `nombreMunicipio`, `direccion`, `distrito`, `provincia`, `region`, `telefono`, `correoMunicipal`, `paginaWeb`, `estado`,`fecha`) VALUES (NULL,'nombre$i','apellido$i','Trabajador',123456789,'persona$i@gmail.com','Municipio de Lima','Jr Iquitos 100 Xxxx xxxx x x x x','Lima','Lima','Callao','123456789','municipio@gmail.com','paginita.com','$estado', '$fecha'); <br>";
    }

        ?>