<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<?php
    // if(isset($_GET['acao'])){
    //     $nome = @$_GET['nome'];
    //     $email = @$_GET['email'];

    //     echo $nome;
    //     echo   '<br>';
    //     echo $email;
    // }

    
    #Usando o metodo post não aparece na url (mais recomendado)
    // if(isset($_POST['acao'])){
    //     $nome = @$_POST['nome'];
    //     $email = @$_POST['email'];

    //     echo $nome;
    //     echo   '<br>';
    //     echo $email;
    // }
if(isset($_POST['acao'])){
    foreach ($_POST['valor'] as $key => $value) {
        # code...
        echo $key;
        echo '=>';
        echo $value;
        echo '<br>';

    }
}


?>
    <form method="post">
        <input type="text" name="nome">
        <input type="text" name="email">

        <input type="checkbox" name = "valor[ ]" value = 10>
        <input type="checkbox" name = "valor[ ]" value = 20>
        <input type="checkbox" name = "valor[ ]" value = 30>
        <input type="checkbox" name = "valor[ ]" value = 40>
        <input type="submit" name="acao" value ="Enviar">
    </form>
</body>
</html>