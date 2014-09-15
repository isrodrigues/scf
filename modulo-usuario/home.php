<?php
if($user->tipo == 'modulo-usuario'){
    $pgs = array ('vagas-listar','vagas-pesquisar','vagas-chamadas','curriculo-visualizar','curriculo-alterar');
}else{
    session_destroy();
    header('Location: ./');
}
    $p = (in_array($_GET['p'], $pgs)) ? $_GET['p'] : 'vagas-listar';
    require_once $user->tipo.'/'.$p.'/home.php';
?>