<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>SCF</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <body>
    
<?php
    // session_destroy();
    if(!isset($_SESSION['user'])){
            $pgs = array ('cadastro-usuario','esqueci-senha', 'login');
            $p = (in_array($_GET['p'], $pgs)) ? $_GET['p'] : 'login';
            require_once 'estrutura/'.$p.'/home.php';
    }else{
            $user = json_decode($_SESSION['user']);
            require_once $user->tipo.'/home.php';
    }
?>

    </body>
</html>