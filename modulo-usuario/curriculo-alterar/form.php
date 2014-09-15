<?php
    $estados = array("AC"=>"Acre", "AL"=>"Alagoas", "AM"=>"Amazonas", "AP"=>"Amapá","BA"=>"Bahia","CE"=>"Ceará","DF"=>"Distrito Federal","ES"=>"Espírito Santo","GO"=>"Goiás","MA"=>"Maranhão","MT"=>"Mato Grosso","MS"=>"Mato Grosso do Sul","MG"=>"Minas Gerais","PA"=>"Pará","PB"=>"Paraíba","PR"=>"Paraná","PE"=>"Pernambuco","PI"=>"Piauí","RJ"=>"Rio de Janeiro","RN"=>"Rio Grande do Norte","RO"=>"Rondônia","RS"=>"Rio Grande do Sul","RR"=>"Roraima","SC"=>"Santa Catarina","SE"=>"Sergipe","SP"=>"São Paulo","TO"=>"Tocantins");
    $estadoCivil = array("solteiro"=>"solteiro(a)", "casado"=>"casado(a)", "viuvo"=>"viuvo(a)");
    $nivelEscolar = array("0"=>"-- Selecione o nível --","fundamental"=>"Ensino Fundamental", "fundamental-Incompleto"=>"Ensino Fundamental Incompleto","medio"=>"Ensino Medio","medio-imcompleto"=>"Ensino Medio Incompleto","superior"=>"Ensino Superior","superior-incompleto"=>"Ensino Superior Imcompleto");
 ?>
<h2>Alterar currículo</h2>
<form name="cadastrousuario" method="post" action="estrutura/cadastro-usuario/sql.php">
    <fieldset>
        <legend>Dados Pessoais</legend>
            <label for="nome">Nome Completo:</label>
            <input type="text" name="nome"/>
            
            <label for="sexo">Sexo:</label>
                <input type="radio" name="sexo" value ="m"/> masculino
                <input type="radio" name="sexo" value ="f"/> feminino
            
            <label for="estadoCivil">Estado Civil</label>
            <select name="estadoCivil" id="estadoCivil">
            <?php
                for($i = 0; $i <= sizeof($estadoCivil); $i++){
                    $key = array_keys($estadoCivil)[$i];
                    echo '<option value="'.$key.'">'.$estadoCivil[$key].'</option>';
                }
            ?>
            </select>
            
            <label for="filho">Possui filhos?</label>
            <input  type="number" name="filho" />
    </fieldset>
    
    <fieldset>
        <legend>Documentos</legend>
            <label for="razao">Razão Social:</label>
            <input type="text" name="razao"/>
            
            <label for="fantasia">Nome Fantasia:</label>
            <input type="text" name="fantasia"/>
        
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" maxlength="11"/>
            
            <label for="cnpj">CNPJ:</label>
            <input type="text" name="cnpj" maxlength="11"/>
    
            <label for="rg">RG:</label>
            <input type="text" name="rg" maxlength="10"/>
            
            <label for="ctps">CTPS:</label>
            <input type="text" name="ctps"/>
            
            <label for="cnh">CNH:</label>
            <input type="text" name="cnh" maxlength="15"/>
            
            <label for="">Categoria</label>
                <input type="checkbox" name="categoria" value ="A"/> A
                <input type="checkbox" name="categoria" value ="B"/> B
                <input type="checkbox" name="categoria" value ="C"/> C
                <input type="checkbox" name="categoria" value ="D"/> D
                <input type="checkbox" name="categoria" value ="E"/> E
    </fieldset>
    
    <fieldset>
        <legend>Localidade</legend>
            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco"/>
            
            <label for="numero">Número:</label>
            <input type="text" name="numero"/>
            
            <label for="complemento">Complemento:</label>
            <input type="text" name="complemento"/>
            
            <label for="bairro">Bairro:</label>
            <input type="text" name="bairro"/>
            
            <label for="cidade">Cidade:</label>
            <input type="text" name="cidade"/>
            
            <label for="estado">Estado:</label>
            <select name="estado" id="estado">
                <?php
                    for($i = 0; $i <= sizeof($estados); $i++){
                        $key = array_keys($estados)[$i];
                        echo '<option value="'.$key.'">'.$estados[$key].'</option>';
                    }
                ?>
            </select>
    </fieldset>

    <fieldset>
        <legend>Escolaridade</legend>
            <label for="nivel-escolar">Nivel Escolar</label>
            <select name="nivel-escolar" id="nivel-escolar">
                <?php
                    for($i = 0; $i <= sizeof($nivelEscolar); $i++){
                        $key = array_keys($nivelEscolar)[$i];
                        echo '<option value="'.$key.'">'.$nivelEscolar[$key].'</option>';
                    }
                ?>
            </select>
    </fieldset>
   
    <input type="submit" value="Alterar"/>
    <input type="button" value="Cancelar" onclick="window.location.href='?p=login'"/>
</form>