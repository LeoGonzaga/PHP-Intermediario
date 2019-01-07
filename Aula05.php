<!-- Funções para strings -->

<?php
        // $conteudo = 'Lorem Ipsum is simply dummy text of the printing
        //  and typesetting industry. Lorem Ipsum has been the industrys
        //   standard dummy text ever since the 1500s, when an unknown
        //    printer took a galley of type and scrambled it to make a type 
        //    specimen book. It has survived not only five centuries, but also
        //     the leap into electronic typesetting, remaining essentially unchanged
        //     . It was popularised in the 1960s with the release of Letraset 
        //     sheets containing Lorem Ipsum passages, and more recently
        //      with desktop publishing software like Aldus PageMaker
        //       including versions of Lorem Ipsum.';

            //   #Cortar a string
            //   $var1 = substr($conteudo,0, 5);
            //   #Primeiro parametro é a variavel a ser cortada
            //   #Segundo parametro é onde começa
            //   #Terceiro parametro é a quantidade de letras que ce quer pegar
            //   echo $var1;

            //   #Separa por um espaço ou letra determinada e retona um array
            //   $nome = 'Leonardo Gonzaga Silva';
            //  $arr =  explode(' ', $nome); #Separa as palavras por esaço
            //   print_r($arr); #Printa o array


            #Remova as tags de html deixando apenas o conteudo dentro delas
              $conteudo = '<h1>Leonardo</h1> outa coisa';
              $novo = strip_tags($conteudo);
              echo $novo;
?>