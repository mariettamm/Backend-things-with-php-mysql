<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Incidencias y preguntas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
  </head>
  <body>
    <h1>Incidencias</h1>
    <h3>
      Por favor, introduzca sus datos a continuación y describa el tipo de
      incidencia:
    </h3>
    <p><i>Nos pondremos en contacto con usted en lo antes posible.</i></p>
    <form action="verificar.php" method="POST">
      <ul>
        <div class="campo">
          <label for="nombre">Nombre:</label>
          <input
            type="text"
            name="nombre"
            id="nombre"
            placeholder="Requerido"
            required
          />
        </div>
        <br />
        <div class="campo">
          <label for="apellidos">Apellidos:</label>
          <input
            type="text"
            name="apellidos"
            id="apellidos"
            placeholder="Requerido"
            required
          />
        </div>
        <br />
        <div class="campo">
          <label for="telefono">Teléfono:</label>
          <input
            type="tel"
            name="telefono"
            id="telefono"
            placeholder="Requerido"
            pattern="[0-9]{9}"
            required
          />
        </div>
        <br />
        <div class="campo">
          <label for="email">Correo electrónico:</label>
          <input
            type="email"
            name="email"
            id="email"
            placeholder="Requerido"
            required
          />
        </div>
        <br />
        <div class="campo">
          <select name="departamentos" req>
            <option value="0">Seleccione departamento:</option>
            <option value="1">Departamento1</option>
            <option value="2">Departamento2</option>
            <option value="3">Departamento3</option>
          </select>
        </div>
        <br />
        <div class="campo">
          <input
            type="text"
            name="asunto"
            id="asunto"
            placeholder="Asunto"
            required
          />
        </div>
        <br />
        <div class="campo">
          Describa con detalle su incidencia:<br />
          <textarea
            name="descripcion"
            id="descripcion"
            rows="4"
            cols="50"
            required
          ></textarea>
        </div>
        <br />
        <div class="campo">
          <input type="submit" value="Enviar" />
        </div>
      </ul>
    </form>
  </body>
</html>
