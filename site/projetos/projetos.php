<h4>Projetos Ativos</h4>

<?php

include 'functions.php';

$conn = conectar();

$nomeProjeto = filter_input(INPUT_GET, 'nomeProjeto');

if (($nomeProjeto != "") && (isset($nomeProjeto))) {
    $sql = "SELECT * FROM projeto p WHERE p.nome LIKE '$nomeProjeto' ORDER BY p.nome ";
} else {
    $sql = "SELECT * FROM projeto p ORDER BY p.nome ";
}

$result = $conn->query($sql);

echo '<table border="1" cellspacing="1" cellpadding="3">';
echo '    <thead>';
echo '        <tr>';
echo '            <th>Id</th>';
echo '            <th>nome</th>';
echo '            <th>Data de Início</th>';
echo '            <th>Data de Término</th>';
echo '            <th>Editar</th>';
echo '            <th>Excluir</th>';
echo '        </tr>';
echo '    </thead>';
echo '    <tbody>';

if (($result != FALSE) && ($result->num_rows > 0)) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id_projeto"] . "</td>";
        echo "<td>" . $row["nome"] . "</td>";
        echo "<td>" . $row["data_inicio"] . "</td>";
        echo "<td>" . $row["data_termino"] . "</td>";
        echo '<td><a href="?page=editarProjeto&id_projeto=' . $row["id_projeto"] . '"><button>Editar</button></a></td>';
        echo '<td><a href="?page=deletarProjeto&id_projeto=' . $row["id_projeto"] . '"><button>Deletar</button></a></td>';
        echo "</tr>";
    }
} else {
    echo "0 results";
}

echo "    </tbody>";
echo "</table>";

$conn->close();