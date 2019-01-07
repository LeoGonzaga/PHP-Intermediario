<?php
    session_start();
    setcookie('nome', 'Leo', time() + 60, '/');
    echo $_COOKIE['nome'];

?>