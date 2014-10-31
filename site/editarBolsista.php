<div>
    <?php
    $id_bolsista = filter_input(INPUT_GET, 'id_bolsista');

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "mydb";

    if ((isset($id_bolsista)) && ($id_bolsista != "")) {
        $sql = "SELECT * FROM bolsista b WHERE b.id_bolsista = '$id_bolsista'";         

        $conn = new mysqli($host, $user, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $result = $conn->query($sql);

        if (($result == TRUE) && ($result->num_rows > 0)) {
            
            $row = $result->fetch_assoc();

            echo "<form name=\"formulario\" action=\"alterarDados.php\" method=\"POST\">
						<table id=\"tabela_cadastro\">
							<tr>
								<td>Id:</td>
								<td><input type=\"text\" name=\"id_bolsista\" value=\"" . $row["id_bolsista"] . "\"><br></td>
							</tr>
							<tr>
								<td>Nome:</td>
								<td><input type=\"text\" name=\"nome\" value=\"" . $row["nome"] . "\"><br></td>
							</tr>
							<tr>
								<td>Salário: </td>
								<td><input type=\"text\" name=\"salario\" value=\"" . $row["salario"] . "\"></td>
							</tr>
							<tr>
								<td>Email: </td>
								<td><input type=\"text\" name=\"email\" value=\"" . $row["email"] . "\"></td>
							</tr>
                                                        <tr>
								<td>Telefone: </td>
								<td><input type=\"text\" name=\"telefone\" value=\"" . $row["telefone"] . "\"></td>
							</tr>
							<tr>
								<td><input type=\"submit\" value=\"Enviar\"></td>
								<td><input type=\"reset\" value=\"Limpar\"></td>
							</tr>
							</table>
                                      </form>";
        }

        $conn->close();
    }
    ?>
</div>
