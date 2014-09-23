<?php
    $nivelEscolar = array("0"=>"-- Selecione o nível --","fundamental"=>"Ensino Fundamental", "fundamental-Incompleto"=>"Ensino Fundamental Incompleto","medio"=>"Ensino Medio","medio-imcompleto"=>"Ensino Medio Incompleto","superior"=>"Ensino Superior","superior-incompleto"=>"Ensino Superior Imcompleto");
 ?>


<h2><legend>Inserção de vagas</legend></h2>

  <label>Nome da empresa: <?=></label>
  
  <label>Quantidade de vagas disponibilizadas: </label>
    <input type="number" name="quantidade"/>
    
  <label>Cargo: <?=></label>
    <input type="text" name="cargo"/>
    
  <label>Salário: R$</label>
    <input type="number" step="0.01" name="salario"/>
  
  
 <label for="estadoCivil">Escolaridade exigida</label>
            <select name="nivelEscolar" id="nivelEscolar">
            <?php
                for($i = 0; $i <= sizeof($nivelEscolar); $i++){
                    $key = array_keys($nivelEscolar)[$i];
                    echo '<option value="'.$key.'">'.$nivelEscolar[$key].'</option>';
                }
            ?>
            </select>
            
  
