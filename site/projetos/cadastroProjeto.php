<div>
    <form name="cadastroProjeto" action="./projetos/cadastroProjetoForm.php" method="POST" enctype="multipart/form-data">
        <table border="1">
            <thead>
                <tr>
                    <th>Cadastro de Projeto 
                        <br><br></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nome do projeto </td>
                    <td><input type="text" name="nomeProjeto"/></td>
                </tr>
                <tr>
                    <td>Data de início</td>
                    <td><input type="text" name="dataInicio" value="" /></td>
                </tr>
                <tr>
                    <td>Data de término</td>
                    <td><input type="text" name="dataTermino" value="" /></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Cadastrar" name="cadastrar" /></td>
                    <td><input type="reset" value="Limpar" name="clear" /></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>