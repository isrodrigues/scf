<?php
if($user->tipo == 'modulo-empresa'){
    $pgs = array ('vagas-listar','vagas-pesquisar','vagas-chamadas','curriculo-visualizar','curriculo-cadastrar','curriculo-alterar');
}else{
    session_destroy();
    header('Location: ./');
}
    $p = (in_array($_GET['p'], $pgs)) ? $_GET['p'] : 'vagas-listar';
    require_once $user->tipo.'/'.$p.'/home.php';
?>