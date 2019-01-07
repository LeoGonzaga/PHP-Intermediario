<!-- Funções para array -->

<?php
    $array1 = array('Nome1','Nome2','Nome3','Nome4','Nome5');
    $array2 = array('Sobrenome1','Sobrenome2','Sobrenome3','NomSobrenome1e4','Sobrenome5');

    $juntarArray = array_merge($array1, $array2);

    print_r ($juntarArray);
?>