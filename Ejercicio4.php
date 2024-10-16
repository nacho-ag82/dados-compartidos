<?php 
//Creo un array para meter los dados generados aleatoriamente
$arrayDados =[];

//Muestro la tirada de los 6 dados, cada dado cun un numero aleatorio generado, ademas muestro cada uno de los dados
echo "<h3>Tirada de 6 dados</h3>";
for ($i = 0; $i < 6; $i++){
    $dadoAleatorio = rand(1,6);
    array_push( $arrayDados,$dadoAleatorio);
    mostrarImagen($dadoAleatorio);
}

//Muestro el dado que quiero eliminar
echo "<h3>Dado a eliminar</h3>";
$dadoEliminar = rand(1,6);
mostrarImagen($dadoEliminar);

//Elimino el dado a eliminar del array de dados
echo "<h3>Dados Restantes<h3><br>";
$arrayDados= array_diff($arrayDados,   array($dadoEliminar));

//Muestro el array de dados sin el dado a eliminar, ya que lo he eliminado previamente
foreach ($arrayDados as $dados) { 
    mostrarImagen($dados);
}

//Creo una funcion con un switch que dependiendo del numero del dado muestre una imagen u otra
//La funcion la he hecho porque es un codigo que voy a volver a reutilzar
function mostrarImagen($dado){
    echo"<img src='Imagenes/$dado.svg' alt='Dado 1'/>";   
}
?>