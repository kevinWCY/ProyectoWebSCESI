<?php

include("conectar.php");

if(isset($_POST['enviar'])){
    if(strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['usuario']) >= 1 && strlen($_POST['password']) >= 1 ){
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $usuario = trim($_POST['usuario']);
        $password = trim($_POST['password']);
        $fecha = date("d/m/y");

        $consulta = "INSERT INTO bdr(nombre,email,usuario,contrasenia,fecha) VALUES('$name','$email','$usuario','$password','$fecha')";
        $resultado = mysqli_query($coneccion,$consulta);

        if($resultado){
            ?>
            <h3 class = "registrado">Registrado</h3>
            <?php
        } else{
            ?>
            <h3 class = "error">Error</h3>
            <?php
        }  
    } else {
        ?>
        <h3 class = "error">Debes llenar todos los campos</h3>
        <?php
    }
}
?>