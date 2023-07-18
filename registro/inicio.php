<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css" >
</head>
<body>

    <form method="post">

        <h2>Registro</h2>   

        <div class="relleno">
            <input type="text" name="name" placeholder="ingrese su nombre">
        </div>

        <div class="relleno">
            <input type="email" name="email" placeholder="ingrese correo">
        </div>

        <div class="relleno">
        <input type="text" name="usuario" placeholder="ingrese su usuario">
        </div>

        <div class="relleno">
        <input type="password" name="password" placeholder="ingrese su contraseña">
        </div>

        <input class="boton" type="submit" name="enviar" value="Enviar">  

    </form>

    <?php
     include("registrar.php");
    ?>
    
</body>
</html>