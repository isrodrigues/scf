<?php

class crud{
	private $campo;
	private $tabela;
	private $condicao;
	private $valores;

	public function setCampo($campo){
		$this->campo = $campo;
	}
	public function setTabela($tabela){
		$this->tabela = $tabela;
	}
	public function setCondicao($condicao){
		$this->condicao = $condicao;
	}

	public function select(){
		$_SQL = 'SELECT '.$this->campo.' FROM '.$this->tabela;
		$_SQL = (isset($this->condicao))? $_SQL.' WHERE '.$this->condicao : $_SQL;

		$return = mysql_query($_SQL) or die ("Erro na consulta. <::> ".mysql_error());
		return mysql_fetch_object($return);
	}
}

?>