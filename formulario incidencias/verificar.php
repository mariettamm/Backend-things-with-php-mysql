<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php if (!empty($_POST['nombre']) && !empty($_POST['apellidos'])) {
        echo
        "<title>Datos recibidos</title>";
    } else {
        echo "<title>Error en los datos enviados</title>";
    }
    ?>
</head>

<body>
    <?php
    if (!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['telefono']) && !empty($_POST['email']) && !empty($_POST['departamentos']) && !empty($_POST['asunto']) && !empty($_POST['descripcion'])) {
        echo "<h2>Los datos se han recibido correctamente.</h2>
    <p>En breve nos pondremos en contacto con usted. A continuación puede revisar los datos que nos acaba de enviar:</p>";
        //Definiendo variables
        // variable: nombre = lo que se reciba por post con el div "nombre"
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $departamentos = $_POST['departamentos'];
        $asunto = $_POST['asunto'];
        $descripcion = $_POST['descripcion'];

        //imprimiendo los datos enviados por el post usando las variables que acabamos d edefinir
        echo '<ul><b>Nombre:</b> ' . "$nombre<br>";
        echo '<b>Apellidos: </b>' . "$apellidos<br>";
        echo '<b>Telefono: </b>' . "$telefono<br>";
        echo '<b>Correo electrónico: </b>' . "$email<br>";
        echo '<b>Departamento: </b>' . "$departamentos<br>";
        echo '<b>Asunto: </b>' . "$asunto<br>";
        echo '<b>descripcion: </b>' . "$descripcion</ul>";
    } else {
        // definir la variable que contiene el enlace para volver al formulario:
        $aqui = '<a href="incidencias.php">aquí</a>';
        // redirección
        header('Refresh: 10, URL=incidencias.php');
        // mensaje
        echo '<h2>Faltan datos.</h2>
        <p>Por favor, vuelva a la página anterior y rellene el formulario correctamente con los datos que solicitados para que podamos atender su incidencia.</p>
        <p>A continuación, será redireccionado a la página interior. Revise sus datos y reenvienos su incidencia.</p>
        <p>Si su navegador no le reedirecciona automáticamente en 10 segundos, pulse ' . $aqui . '.';
    }
    ?>
</body>

</html>