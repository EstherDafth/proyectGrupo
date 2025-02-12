<?php
echo "Hola esta es mi pagina <br>";


//Definimos la función de conversión de pesetas a euros
function convertir_a_euros($pesetas)
{
    $euros = $pesetas / 166.386;
    return $euros;
}

$resultado = convertir_a_euros(2500); //Llamamos a la función
print $resultado;

