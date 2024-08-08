<?php
if (empty($_GET["nombre"])|| empty($_GET["apellido"])){
    echo "Los campos estan vacios";
}else{
    echo "Hola, tu nombre es"." ".$_GET["nombre"]." ".$_GET["apellidos"];
}

