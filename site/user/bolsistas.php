<h4>Bolsistas</h4>

<form name="cadastroBolsista" action="./?page=bolsistas" method="POST" enctype="multipart/form-data">
    Nome: <input type="text" name="nomeBolsista" value="">
    <input type="submit" value="Buscar" name="buscar" />
</form>

<?php
include "functions.php";

$conn = conectar();
$nomeBolsista = filter_input(INPUT_POST, "nomeBolsista");

if (($nomeBolsista != "") && (isset($nomeBolsista))) {
    $sql = "SELECT * FROM bolsista b WHERE b.nome LIKE '$nomeBolsista%' ORDER BY b.id_bolsista ";
} else {
    $sql = "SELECT * FROM bolsista b ORDER BY b.id_bolsista";
}

$result = $conn->query($sql);

echo '<table border="1" cellspacing="1" cellpadding="3">';
echo '    <thead>';
echo '        <tr>';
echo '            <th>Nome</th>';
echo '            <th>Salário</th>';
echo '            <th>E-mail</th>';
echo '            <th>Telefone</th>';
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
        echo '    <td>';
        echo '        <a href="?page=editarBolsista&id_bolsista=' . $row["id_bolsista"] . '">';
        echo '            <button>Editar</button>';
        echo '        </a>';
        echo '    </td>';
        echo '    <td>';
        echo '        <a href="?page=deletarBolsista&id_bolsista=' . $row["id_bolsista"] . '">';
        echo '            <button>Deletar</button>';
        echo '        </a>';
        echo '    </td>';
        echo '</tr>';
    }
}
echo "    </tbody>";
echo "</table>";

$conn->close();