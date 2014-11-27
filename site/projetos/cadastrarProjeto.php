<h4>Cadastro de Projetos</h4>
<div id="boxCadastro">
    <form name="cadastrarProjeto" action="./projetos/cadastrarProjetoForm.php" method="POST" enctype="multipart/form-data">
        Nome do projeto: <br>
        <input type="text" name="nomeProjeto" class="largeItem" /><br>
        <br>
        
        Data de início: <br>
        <input type="date" name="dataInicio" class="largeItem" /><br>
        <br>
        
        Data de término: <br>
        <input type="date" name="dataTermino" class="largeItem" /><br>
        <br>
        
        <input type="submit" value="Cadastrar" name="cadastrar" class="smallRightItem" />
    </form>
</div>