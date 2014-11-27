<h4>Editar Projeto</h4>
<?php

include "functions.php";

$conn = conectar();
$idProjeto = filter_input(INPUT_GET, "idProjeto");

if ((isset($idProjeto)) && ($idProjeto != "")) {
    
    $sql = "SELECT * FROM projeto p WHERE p.id_projeto = $idProjeto";         
    $result = $conn->query($sql);
    
    if (($result == TRUE) && ($result->num_rows > 0)) {
        
        $row = $result->fetch_assoc();
        ?>
        <div id="boxCadastro">
            <form name="formulario" action="./projetos/editarProjetoForm.php" method="POST">
                
                Nome do projeto: <br>
                <input type="text" name="nome" value="<?php echo $row["nome"]; ?>" class="largeItem" /><br>
                <br>

                Data de início: <br>
                <input type="text" name="dataInicio" value="<?php echo $row["data_inicio"]; ?>" class="largeItem" /><br>
                <br>

                Data de término: <br>
                <input type="text" name="dataTermino" value="<?php echo $row["data_termino"]; ?>" class="largeItem" /><br>
                <br>
                
                <input type="hidden" name="idProjeto" value="<?php echo $idProjeto; ?>" />
                <input type="submit" value="Cadastrar" name="cadastrar" class="smallRightItem" />
            </form>
        </div><?php
    }
    $conn->close();
    
} else {
    $conn->close();
    header("Location: ?page=projetos&erro=1");
}