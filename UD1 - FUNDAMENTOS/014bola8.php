<!-- 014bola8.html: Prepara un formulario con una caja de texto que realice a 
una pregunta al usuario. 014bola8.php: A partir del anterior, crea un 
programa que muestre la pregunta recibida y genere una respuesta de 
manera aleatoria entre un conjunto de respuestas predefinidas, 
almacenadas en un array: Sí, no, quizás, claro que sí, por supuesto que no, 
no lo tengo claro, seguro, yo diría que sí, ni de coña, etc...
Este ejercicio se basa en el juego de la Bola 8 mágica. -->
<?php 

$pregunta = $_GET['pregunta'];
$respuestas = ["Si", "No", "Quizás", "Claro que sí", "Por supuesto que no", "No lo tengo claro", "Seguro", "Yo diría que sí", "Ni de coña", "A la playa!"];
$arraysize = count($respuestas);
$random = rand(1, $arraysize) - 1;

echo $pregunta."<br>";

for($i = 0; $i < $arraysize; $i++){
    if ($i == $random){
        echo $respuestas[$i];
    }
}