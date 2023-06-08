<?php
include("fm_conexion.php");

//Codigo sql
$sql = "SELECT usuario, contrasenia FROM users";
$cQuery = mysqli_query($enlace,$sql);
//Validar

if(!empty($_POST['btningre'])){
    if(empty($_POST['usuario']) or empty($_POST['contrasenia'])){
        echo "Parece que no se detecto nada";
    }else{
        $user = $_POST['usuario'];
        $contra =  $_POST['contrasenia'];

        while($mostrar = mysqli_fetch_row($cQuery)){
            if($user == $mostrar[0] and $contra == $mostrar[1]){
                header("Location: opFemult.php");
            }else{
                echo "Datos Incorrectos";
            }
        }
    }
}
?>