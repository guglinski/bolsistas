<h4>Editar Usuário</h4>
<?php
include "functions.php";

$conn = conectar();
$idUsuario = filter_input(INPUT_GET, 'idUsuario');

if ((!isset($idUsuario)) && (!$idUsuario != "")) {
    header("Location: ../?page=usuarios");
}

$sql = "SELECT * FROM usuario u WHERE u.id_usuario = $idUsuario";         
$result = $conn->query($sql);

if (($result == TRUE) && ($result->num_rows > 0)) {
    
    $row = $result->fetch_assoc();
    ?>
    <div id="boxCadastro">
        <form name="formEditarUsuario" action="./user/editarUsuarioForm.php" method="POST" enctype="multipart/form-data">
            
            <input type="checkbox" id="coordenador" name="coordenador" value="teste" onchange="desabilitaCamposCadastro();" />
            <label>Eu sou coordenador.</label>
            <br>
            <br>
            
            <label>Nome:</label><br>
            <input type="text" id="nome" name="nome" value="<?php echo $row["nome"]; ?>" class="largeItem" /><br>
            <br>

            <div id="salarioBox">
                <label>Salário:</label><br>
                <input type="text" id="salario" name="salario" value="<?php echo $row["salario"]; ?>" class="largeItem" /><br>
                <br>
            </div>

            <div id="emailBox">
                <label>E-mail</label><br>
                <input type="text" id="email" name="email" value="<?php echo $row["email"]; ?>" class="largeItem" /><br>
                <br>
            </div>

            <div id="telefoneBox">
                <label>Telefone:</label><br>
                <input type="text" id="telefone" name="telefone" value="<?php echo $row["telefone"]; ?>" class="largeItem" /><br>
                <br>
            </div>
            
            <input type="hidden" name="idUsuario" value="<?php echo $idUsuario; ?>" />
            <input type="submit" value="Cadastrar" name="editarUsuario" class="smallRightItem" />
        </form>
    </div>
    <script><?php
        if ($row["coordenador"]) {
            echo 'var coordenador = document.getElementById("coordenador");';
            echo 'coordenador.checked = true;';
            echo 'desabilitaCamposCadastro();';
        } ?>
    </script><?php
}

$conn->close();