<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formularios</title>
</head>
<body>
    <!--  El atributo action -> Indicamos el archivo que leera y tratará los datos del formulario  -->
    <!--  El atributo method -> Indica el método de envío con el que el formulario se enviará  -->
    <h1>Formulario de Registro</h1>
    <!--  <form action="lectura1.php" method="get">  -->
    <form action="lectura2.php" method="post">
    <!--  Todos los campos deben estar dentro de la etiqueta <form></form>  -->
        <p>
        <label for="nombre">Nombre</label>
            <!--  El atributo name -> Es indispensable para que el archivo de lectura recupere los datos.  -->
            <input type="text" name="nombre" id="nombre">
        </p>
        <p>
            <label for="apellido">Apellidos</label>
            <!--  La type submit -> Activa el formulario y ahce el envío.  -->
            <input type="text" name="apellidos" id="apellidos">
        </p>

        <p>
            <label for="idioma">Indica tu idioma:</label>
            <input type="radio" name="idiona" id="idioma" value="es">Español
            <input type="radio" name="idiona" id="idioma" value="en">Ingles
            <input type="radio" name="idiona" id="idioma" value="fr">Frances
        </p>

        <p>pies
            <label for="intereses">Intereses</label>
            <input type="checkbox" name="interes[]" id="intereses" value="futbol">Fútbol
            <input type="checkbox" name="interes[]" id="natacion" value="natacion">Natación
            <input type="checkbox" name="interes[]" id="baloncesto" value="baloncesto">Baloncesto
            <input type="checkbox" name="interes[]" id="sky" value="sky">Sky
        </p>


        <input type="submit" value="Enviar">
    </form>

    <br>
    <br>
    <a href="destino.php?ciudad=Tomelloso">Muestra tu ciudad</a>








</body>
</html>
