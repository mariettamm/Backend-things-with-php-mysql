<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    //Definiendo variables
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $departamentos = $_POST['departamentos'];
    $asunto = $_POST['asunto'];
    $descripcion = $_POST['descripcion'];

    if (!empty($nombre) && !empty($apellidos) && !empty($telefono) && !empty($email) && !empty($departamentos) && !empty($asunto) && !empty($descripcion)) {
        echo
        "<title>Datos recibidos</title>";
    } else {
        echo "<title>Error en los datos enviados</title>";
    }
    ?>
</head>

<body>
    <?php
    //Definiendo variables
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $departamentos = $_POST['departamentos'];
    $asunto = $_POST['asunto'];
    $descripcion = $_POST['descripcion'];

    if (!empty($nombre) && !empty($apellidos) && !empty($telefono) && !empty($email) && !empty($departamentos) && !empty($asunto) && !empty($descripcion)) {
        echo "<h2>Los datos se han recibido correctamente.</h2>
    <p>En breve nos pondremos en contacto con usted. A continuación puede revisar los datos que nos acaba de enviar:</p>";


        //imprimiendo los datos enviados por el post usando las variables que acabamos d edefinir
        echo '<ul><b>Nombre:</b> ' . "$nombre<br>";
        echo '<b>Apellidos: </b>' . "$apellidos<br>";
        echo '<b>Telefono: </b>' . "$telefono<br>";
        echo '<b>Correo electrónico: </b>' . "$email<br>";
        echo '<b>Departamento: </b>' . "$departamentos<br>";
        echo '<b>Asunto: </b>' . "$asunto<br>";
        echo '<b>descripcion: </b>' . "$descripcion</ul>";
    } else {
        // redirección
        header('Refresh: 10, URL=incidencias.php');
        // mensaje
        echo '<h2>Faltan datos.</h2>
        <p>Por favor, vuelva a la página anterior y rellene el formulario correctamente con los datos que solicitados para que podamos atender su incidencia.</p>
        <p>A continuación, será redireccionado a la página interior. Revise sus datos y reenvienos su incidencia.</p>
        <p>Si su navegador no le reedirecciona automáticamente en 10 segundos, pulse <a href="incidencias.php">aquí</a>.';
    }
    ?>
</body>

</html>