<?php

// Escribe una función llamada "primos" que encuentre y almacene en un array todos los números primos entre 1 y 100. Luego, imprime este array.
// Un número primo es un número que solo es divisible por 1 y por sí mismo.

// Aquí tu código

function primos(){

    $array = [];

    echo "Números primos prueba<br>";

    for ($i = 1; $i < 100; $i++){

        # Filtra números impares y el número 2
        if ($i != 1 && $i % 2 != 0 || $i == 2){

            # Filtra los números primos del 1 al 10
            if ($i == 2 || $i == 3 || $i == 5 || $i == 7){

                if ($i == 2){
                    echo $i;
                }
                else{
                    echo ", " . $i;

                }

                $array[] = $i;
            }

            # Filtra los números no divisibles por los números primos el 1 al 10
            elseif ($i % 3 != 0 && $i % 5 != 0 && $i % 7 != 0){
                echo ", " . $i;
                $array[] = $i;
            }

        }
    }

    echo "<br><br>Números primos reales <br> 2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97<br>";

    return $array;

    # LO HICE PROFEEEEEE
    # Sin ayuda, obviamente

}

// TESTS
assert(primos() == [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97]);