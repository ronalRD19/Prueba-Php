<?php
$edad [0]=13;
$edad [1]=15;
$edad [2]=24;
$i=0; 
while ($i<3){

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
$i++;

}

$edad [0]=23;
$edad [1]=15;
$edad [2]=24;
$i=0; 
do {

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
$i++;

} while ($i<3)
?>