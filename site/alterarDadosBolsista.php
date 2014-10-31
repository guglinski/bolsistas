<div id="content">
    <form name="cadastroBolsista" action="<?php $_SERVER['PHP_SELF']; ?>" method="get">
        <table>
            <tr>
                <td><label>Nome:</label></td>
                <td><input type="text" name="nomeBolsista" value=""/></td>
            </tr>
        </table>
        <input type="submit" value="Buscar" />
        <input type="reset" value="Limpar" name="resetCampos"/>
    </form>
    
    <?php
                $nomeBolsista = filter_input(INPUT_GET, 'nomeBolsista');

                $host = "localhost/bolsita";
                $user = "root";
                $password = "";
                $database = "mydb";

                 $nomeBolsista = "B%";
                if ((isset($nomeBolsista) && ($nomeBolsista != ""))) {
                    $sql = "SELECT * FROM bolsista b WHERE b.nome LIKE '$nomeBolsista' ";

                    $conn = new mysqli($host, $user, $password, $database);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $result = $conn->query($sql);

                    echo "<form action=\"?page=cadastro\" method=\"get\">";
                    
                    echo "<table style=\"width:100%; border: 1px solid black; position: relative;"
                     . " margin: auto; padding: 0px; \">"
                     . "<td>"
                     . "<th>Id</th>" . "<th>Nome</th>" . "<th>Salário</th>". "<th>Email</th>". "<th>Telefone</th>"
                     . "</td>";

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr><td>" . $row["id_bolsista"] . "</td>";
                            echo "<td>" . $row["nome"] . "</td>";
                            echo "<td>" . $row["salario"] . "</td>";
                            echo "<td>" . $row["email"] . "</td>";
                            echo "<td>" . $row["telefone"] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "0 results";
                    }

                    echo "</table>";
                    
                    echo "<input type=\"submit\" value=\"Alterar\" />";
                    echo "</form>";

                    $conn->close();
                }
            ?>  
</div>