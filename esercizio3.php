<!-- Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “PHP” al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY70". -->

<?php

 for ($i = 1; $i <= 100; $i++){
    if ($i % 3 == 0 && $i % 5 == 0){
        echo "HACKADEMY70\n";
  }else if ($i % 3 == 0){
    echo "PHP\n";
  } else if ($i % 5 == 0){
    echo "JAVASCRIPT\n";
  } else {
    echo $i . "\n";
  }
}

?>