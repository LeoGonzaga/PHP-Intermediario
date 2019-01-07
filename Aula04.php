<!-- Funções -->

<!-- <?php

    echo '1 - Somar';
    echo '<br>';
    echo '2 - Subtrair';
    echo '<br>';
    echo '3 - Multiplicar';
    echo '<br>';
    echo '4 - Dividir';
    echo '<br>';
     function Calculadora($op, $var1,$var2)  {
        if($op ==1){
            echo ($var1 + $var2);
        }
        if($op ==2){
            echo ($var1 - $var2);
        }
        if($op ==3){
            echo ($var1 * $var2);
        }
        if($op ==4){
            echo ($var1 / $var2);
        }
    }


    Calculadora(1,10,1);
    echo '<br>';
    Calculadora(2,10,1);
    echo '<br>';
    Calculadora(3,10,1);
    echo '<br>';
    Calculadora(4,10,1);
?> -->


<!-- Funções nativas -->

<?php
    date_default_timezone_set('America/Sao_Paulo'); #Pegar fuso
    $data = date('d/m/Y H:i:s');
    echo $data;
?>
