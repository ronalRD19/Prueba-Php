<?php
$usuario = $_POST['user'];
$password = $_POST['pwd'];
$resultado = verificaDatos ($usuario,$password);
if ($resultado){
    echo "Bienvenido";

} else{
    echo "Datos incorrectos";
}



function verificaDatos ($usuario,$password){
if ($usuario=="Administrador" && $password=="admin1234"){
    return true;
}else{
    return false;
}

}



?>