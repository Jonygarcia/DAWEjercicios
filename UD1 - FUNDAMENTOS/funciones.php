<?php 

// Funciones para los ejercicios 18 y 19.
function declararProductos(){
    $productos = ["Monster" => ["precio" => 1.80, "cantidad" => 0], 
                "Cocacola" => ["precio" => 0.80, "cantidad" => 0], 
                "Fanta" => ["precio" => 0.75, "cantidad" => 0], 
                "Redbull" => ["precio" => 1.20, "cantidad" => 0], 
                "Zumos" => ["precio" => 0.90, "cantidad" => 0]];

    return $productos;
}

function printForm($productos){
    foreach ($productos as $nombres => $datos){  
        echo "<tr>
                <td>$nombres</td>
                <td>" . $datos["precio"] . "</td>
                <td><input name=cant" . $nombres . " type="."number"." min="."0"."></td>
            </tr>";
    }
}

function conversionMoneda($precio){
    return $precio * 166.3860;
}