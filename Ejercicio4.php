<?php 
$arrayDados =[];

echo "<h3>Tirada de 6 dados</h3>";
for ($i = 0; $i < 6; $i++){
    $dadoAleatorio = rand(1,6);
    array_push( $arrayDados,$dadoAleatorio);
    mostrarImagen($dadoAleatorio);
}


echo "<h3>Dado a eliminar</h3>";
$numeroAleatorio = rand(1,6);
$dadoEliminar = $arrayDados[$numeroAleatorio];
mostrarImagen($dadoEliminar);
echo "<h3>Dados Restantes<h3><br>";

$arrayDados= array_diff($arrayDados,   array($dadoEliminar));

foreach ($arrayDados as $dados) { 
    mostrarImagen($dados);
}

//Creo una funcion con un switch que dependiendo del numero del dado muestre una imagen u otra
//La funcion la he hecho porque es un codigo que voy a volver a reutilzar
function mostrarImagen($dado){
    echo"<img src='$dado.svg' alt='Dado 1'/>";   
}


?>