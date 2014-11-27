<h4>Cadastro</h4>

<div id="boxCadastro">
    <form name="cadastroUsuario" action="./user/cadastroForm.php" method="POST" enctype="multipart/form-data">
        
        <input type="checkbox" id="coordenador" name="coordenador" value="teste" onchange="desabilitaCamposCadastro(this);" /> <label>Eu sou coordenador.</label>
        <br>
        <br>
        
        <label>Nome:</label><br>
        <input type="text" id="name" name="nome" value="" class="largeItem" /><br>
        <br>
        
        <div id="salarioBox">
            <label>Salário:</label><br>
            <input type="text" id="salario" name="salario" value="" class="largeItem" /><br>
            <br>
        </div>
        
        <div id="emailBox">
            <label>E-mail</label><br>
            <input type="text" id="email" name="email" value="" class="largeItem" /><br>
            <br>
        </div>
        
        <div id="telefoneBox">
            <label>Telefone:</label><br>
            <input type="text" id="telefone" name="telefone" value="" class="largeItem" /><br>
            <br>
        </div>

        <input type="submit" value="Cadastrar" name="bt_cadastrarUsuario" class="smallRightItem" />
    </form>
</div>