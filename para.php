<?php
   

   $edad = [13, 15, 24]; 
   for ($i = 0; $i < count($edad); $i++) {

if ($edad[$i]>=18){
    echo "la persona ";
    echo $i+1;
    echo" puede  ser registrada.<br>";

} else if($edad[$i]>=15){
    echo "la persona ";
    echo $i+1;
    echo" puede recibir nuestros correos.<br>";

} else{
    echo "la persona ";
    echo $i+1;
    echo" no puede ser registrada.<br>";
}


}
?>