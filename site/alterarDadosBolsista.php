<div>
    <form name="cadastroBolsista" action="<?php $_SERVER['PHP_SELF']; ?>" method="get">
        <table id="tabela_cadastro">
            <tr>
                <td><label>Nome:</label></td>
                <td><input type="text" name="nomeBolsista"><br></td>
            </tr>
            <tr>
                <td><button onClick='formulario.submit();'>Submit</button></td>
                <td><input type="reset" value="Limpar"></td>
            </tr>
        </table>
    </form>

    <?php
    $nomeBolsista = filter_input(INPUT_GET, 'nomeBolsista');

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "mydb";

    if (($nomeBolsista != "") && (isset($nomeBolsista))) {
        $sql = "SELECT * FROM bolsista b WHERE b.nome LIKE '$nomeBolsista' ORDER BY b.id_bolsista ";
    } else {
        $sql = "SELECT * FROM bolsista b ORDER BY b.id_bolsista";
    }
    $conn = new mysqli($host, $user, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query($sql);

    echo "<br><br>";
    
    echo "<table id=\"tableId\" style=\"width:100%; border: 1px solid black; position: relative;"
    . " margin: auto; padding: 0px; \">"
    . "<tr id=\"tableId\">"
    . "<th>Id</th>" . "<th>Nome</th>" . "<th>Salário</th>" . "<th>Email</th>" . "<th>Telefone</th>" . "<th>Edição</th>" . "<th>Excluir</th>"
    . "</tr>";

    if (($result != FALSE) && ($result->num_rows > 0)) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id_bolsista"] . "</td>";
            echo "<td>" . $row["nome"] . "</td>";
            echo "<td>" . $row["salario"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["telefone"] . "</td>";
            echo "<td><a href=\"?page=editarBolsista&id_bolsista=" . $row["id_bolsista"] . "\"><button>Editar</button></a></td>";
            echo "<td><a href=\"?page=deletarBolsista&id_bolsista=" . $row["id_bolsista"] . "\"><button>Deletar</button></a></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }

    echo "</table>";

    $conn->close();
    ?>  

</div>