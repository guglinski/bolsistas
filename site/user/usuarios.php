<h4>Gerenciamento de Usuários</h4>

<form name="buscarUsuario" action="./?page=usuarios" method="POST" enctype="multipart/form-data">
    Buscar (nome): <input type="text" name="nomeUsuario" value="">
    <input type="submit" value="Buscar" name="buscar" />
    <br><br>
</form>

<?php
include "functions.php";

$conn = conectar();
$nomeUsuario = filter_input(INPUT_POST, "nomeUsuario");

if (($nomeUsuario != "") && (isset($nomeUsuario))) {
    $sql = "SELECT * FROM usuario u WHERE u.nome LIKE '$nomeUsuario%' ORDER BY b.nome ";
} else {
    $sql = "SELECT * FROM usuario u ORDER BY u.nome";
}

$result = $conn->query($sql);

echo '<table border="1" cellspacing="1" cellpadding="3">';
echo '    <thead>';
echo '        <tr>';
echo '            <th>Nome</th>';
echo '            <th>Salário</th>';
echo '            <th>E-mail</th>';
echo '            <th>Telefone</th>';
echo '            <th>COORDENADOR?</th>';
echo '            <th>Editar</th>';
echo '            <th>Excluir</th>';
echo '        </tr>';
echo '    </thead>';
echo '    <tbody>';

if (($result != FALSE) && ($result->num_rows > 0)) {
    while ($row = $result->fetch_assoc()) {

        echo '<tr>';
        echo '    <td>' . $row["nome"] . '</td>';
        echo '    <td>' . $row["salario"] . '</td>';
        echo '    <td>' . $row["email"] . '</td>';
        echo '    <td>' . $row["telefone"] . '</td>';
        if ($row["coordenador"]) {
            echo '    <td>Sim</td>';
        } else {
            echo '    <td>Não</td>';
        }
        
        echo '    <td>';
        echo '        <a href="?page=editarUsuario&idUsuario=' . $row["id_usuario"] . '">';
        echo '            <button>Editar</button>';
        echo '        </a>';
        echo '    </td>';
        echo '    <td>';
        echo '        <a href="?page=deletarUsuario&idUsuario=' . $row["id_usuario"] . '">';
        echo '            <button>Deletar</button>';
        echo '        </a>';
        echo '    </td>';
        echo '</tr>';
    }
}
echo "    </tbody>";
echo "</table>";

$conn->close();