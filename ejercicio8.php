<?php

// Genera una función "palindromo" que reciba un string y determine si es un palíndromo (true) o no (false).
// Un palíndromo es una palabra o frase que se lee igual en un sentido que en otro.
// La función deberá devolver un booleano.
// La función deberá ignorar los espacios, los signos de puntuación y deberá ser case-insensitive.


// Aquí tu código

function palindromo(string $word){

    # Letras a minúsculas
    $lower_word = strtolower($word);

    # Se quitan los espacios
    $formated_word = str_replace(" ", "", $lower_word);

    # Se quitan las tildes
    # En este ejemplo basta con quitar el tilde del "a"
    $formated_word = str_replace("á", "a", $formated_word);

    # Dar vuelta el string
    $reverse_formated_word = strrev($formated_word);

    if ($formated_word == $reverse_formated_word){
        return true;
    }
    else{
        return false;
    }

}

// TESTS
assert(palindromo("Anita lava la tina") == true);
assert(palindromo("A mamá Roma le aviva el amor a papá y a papá Roma le aviva el amor a mamá") == true);
assert(palindromo("Anita lava la tina y la atina") == false);
