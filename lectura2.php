<?php
if (empty($_POST["nombre"])|| empty($_POST["apellidos"])){
    echo "Los campos estan vacios";
}else{
    echo "Hola, tu nombre es"." ".$_POST["nombre"]." ".$_POST["apellidos"];
}

echo "<br>";
if (empty($_POST["idioma"])){
    echo "No has seleccionado ningún idioma";
}else{
    if ($_POST["idioma"]=="es"){
        echo "Tu idioma es Español";
    } elseif ($_POST["idioma"]=="en"){
        echo "Tu idioma en Ingles";
    } else{
        echo "Tu idioma es Francés";
    }
}

echo "<br>";
if (empty($_POST["interes"])){
    echo "No has seleccionado ningun interes";
}else{
    echo "Tus intereses son: ";
    foreach ($_POST["interes"] as $intereses) {
        echo "<br>";
        echo $intereses." ";
    }
}


/*
// Al asignarle una variable, se debe hacer si es necesario, porque ocupa un espacio en memoria.
// Si se declara variables, hay que controlar que pasa si lo recibe vacío.
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$idioma = $_POST["idioma"];
var_dump($idioma); // var_dump -> Muestra el tipo y valor de una variable.
$intereses[] = $_POST["interes"];
$edad = $_POST["edad"];
*/