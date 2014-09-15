<?php
session_start();

require_once '../../conn.php';
require_once '../../crud.php';

$c = new conn();
$login = new crud();

$c->conectar();
$login->setCampo('codigo, nome, tipo');
$login->setTabela('tb_usuario');
$login->setCondicao('login = "'.$_POST['login'].'" AND senha = "'.md5($_POST['senha']).'" ');

$_SESSION['user'] = json_encode($login->select());

header('Location: ../../');
?>