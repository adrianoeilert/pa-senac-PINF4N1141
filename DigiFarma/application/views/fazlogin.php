<?php

session_start();

if ($_POST['email'] == 'gabiru@gmail.com' && $_POST['senha'] == '123') {
    $_SESSION['usuario_logado'] = true;
    $_SESSION['nome_do_usuario'] = 'Fulano de Tal';
    header('location:Admin.php');
} else {
    $_SESSION['usuario_logado'] = false;
    unset($_SESSION['nome_do_usuario']);
    header('location:indexs.php?erro_login=1');
}

