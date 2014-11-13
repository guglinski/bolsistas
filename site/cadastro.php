<div>
    <form name="cadastroBolsista" action="cadastroForm.php" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label>Nome:</label></td>
                <td><input type="text" name="nomeBolsista" value=""/></td>
            </tr>
            <tr>
                <td><label>Salário:</label></td>
                <td><input type="text" name="salarioBolsista" value=""/></td>
            </tr>
            <tr>
                <td><label>E-mail</label></td>
                <td><input type="text" name="emailBolsista" value=""/></td>
            </tr>
            <tr>
                <td><label>Telefone:</label></td>
                <td><input type="text" name="telefoneBolsista" value=""/></td>
            </tr>
        </table>
        <input type="submit" value="Cadastrar" name="cadastrarBolsista"/>
        <input type="reset" value="Limpar campos" name="resetCampos"/>
    </form>
</div>