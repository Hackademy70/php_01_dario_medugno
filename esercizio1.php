<?php

// Definire l'array di numeri a scelta
$numeri = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

// Inizializzare le variabili per il conteggio dei numeri pari e la somma di tali numeri
$numeri_pari = 0;
$somma_pari = 0;

// Ciclare attraverso l'array
foreach ($numeri as $numero) {
    // Se il numero è pari, aumentare il conteggio e aggiungere il numero alla somma
    if ($numero % 2 == 0) {
        $numeri_pari++;
        $somma_pari += $numero;
    }
}

// Calcoliamo la media dei numeri pari (se ci sono almeno 1 numero pari)
if ($numeri_pari > 0) {
    $media_pari = $somma_pari / $numeri_pari;
    echo "La media dei numeri pari è: " . $media_pari;
} else {
    echo "Non ci sono numeri pari nell'array.";
}

?>
