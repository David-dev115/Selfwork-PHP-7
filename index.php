<?php


// almeno 8 caratteri
// almeno una maiuscola
// almeno un numero 
// almeno un carattere speciale



// $password = readline("inserisci qui la password: ");

// $password = 'ciao8ciao';

// $lenght = false;
// $number = false;
// $upper = false;


//verifica lunghezza

function checkLength($psw){
    
    if ( strlen($psw) >= 8  ) {
        return true;
    }
    return false;
    
}

// $lenght = checkLength($password);




//verifica presenza numero
// - tramite la buildingfunction is_numeric() verifico se il valore ispezionato è un numero, restituisce un booleano
// - !! occorre però scomporre la password pochè is_numeric deve controllare ogni singolo carattere uno per uno, per farlo utilizzarò un ciclo for (avrò a disposizione la quantità di iterazioni da strlen($password) )



function checkNumber ($psw){
    
    for ( $i=0; $i < strlen($psw); $i++  ) {
        
        if (  is_numeric($psw[$i]) ) {
            return true;      
        }
    }
    // il return va fuori dal ciclo
    return false;
}



// $number = checkNumber($password);


//verifica presenza carattere maiuscolo
// - tramite la buildingfunction ctype_upper() verifico se il valore ispezionato è un numero, restituisce un booleano
// - !! occorre però scomporre la password pochè ctype_upper() deve controllare ogni singolo carattere uno per uno, per farlo utilizzarò un ciclo for (avrò a disposizione la quantità di iterazioni da strlen($password) )

function checkUpper ($psw){
    
    for ( $i=0; $i < strlen($psw); $i++  ) {
        
        if (  ctype_upper($psw[$i]) ) {
            return true;
        }
    }
    // come per il check numero, anche in questo caso il return false va messo dopo il ciclo in modo da ciclare tutti i caratteri
    return false;
    
}

// $upper = checkUpper($password);



// implementare la logica all'interno di una funzione:

// STEP 1: extract
// STEP 2: incapsulate
// STEP 1: abstract
//min 58:50 lezione



// echo $lenght;
// echo $number;



// if($lenght && $number && $upper) {
//     echo "la pw è valida";
// }else {
//     echo "la pw non è valida";
// }




//verifica presenza carattere speciale
// - tramite la buildingfunction in_array() verifico se il valore ispezionato è tra gli elementi presenti nell'array ipsezionato, restituisce un booleano


// $special = false;



function checkSpecial ( $psw ) {
    
    //* l'array con i caratteri speciali consentiti deve essere dentro la funzione per una questione si scoope
    
    $specialChars = [ '!' , '@' , '?' , '$' , '&' ];
    
    
    for ( $i=0; $i < strlen($psw); $i++  ) {
        
        if (  in_array($psw[$i] , $specialChars  ) ) {
            return true;
        }
    }
    // come per il check numero, anche in questo caso il return false va messo dopo il ciclo in modo da ciclare tutti i caratteri
    return false;
    
}

function result ($string) {
    
    if(checkLength($string) && checkNumber($string) && checkUpper($string) && checkSpecial($string) ) {
        echo "la pw è valida \n";
        return true;
    }

    $test1 = "lunghezza: test superato \n";
    $test2 = "presenza numero: test superato \n";
    $test3 = "presenza maiuscolo: test superato \n";
    $test4 = "presenza special: test superato \n";

    if(checkLength($string) == false){
        $test1 = "lunghezza: test non superato \n";
    }

    if(checkNumber($string) == false){
        $test2 = "numero: test non superato \n";
    }

    if(checkUpper($string) == false){
        $test3 = "maiuscola: test non superato \n";
    }

    if(checkSpecial($string) == false){
        $test4 = "special: test non superato \n";
    }


    echo "la pass non è valida \n" , $test1 , $test2 , $test3 , $test4 ;
    return false;
}

// result($password);









// $special = checkSpecial($password);
// var_dump($special);

