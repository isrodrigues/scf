<?php 

class conn{
    private $local = 'localhost';
    private $database = 'dblabeng';
    private $user = 'labeng';
    private $password = 'labeng';
    
    public function conectar(){
        $c = mysql_connect($this->local, $this->user, $this->password) or die ('Erro na conexão com o servidor: '.$this->local.'.'.' .::. '.mysql_error());
        $db = mysql_select_db($this->database, $c) or die ('Banco não encontrado.');
    }
}

?>