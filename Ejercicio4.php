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


//Creo una funcion con un switch que dependiendo del numero del dado muestre una imagen u otra
//La funcion la he hecho porque es un codigo que voy a volver a reutilzar
function mostrarImagen($dado){
    switch($dado){
        case 1:
            echo"<img src='Imagenes/1.svg' alt='Dado 1'/>";
            break;

        case 2:
            echo"<img src='Imagenes/2.svg' alt='Dado 2'/>";
            break;
            
        case 3:
            echo"<img src='Imagenes/3.svg' alt='Dado 3'/>";
            break;
                    
        case 4:
            echo"<img src='Imagenes/4.svg' alt='Dado 4'/>";
            break;

        case 5:
            echo"<img src='Imagenes/5.svg' alt='Dado 5'/>";
            break;

        case 6:
            echo"<img src='Imagenes/6.svg' alt='Dado 6'/>";
            break;
    }
}
?>