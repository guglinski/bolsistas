<div>
    <?php
    
    include "functions.php";
    
    $id_projeto = filter_input(INPUT_GET, 'id_projeto');

    if ((isset($id_projeto)) && ($id_projeto != "")) {
        $sql = "SELECT * FROM projeto p WHERE p.id_projeto = '$id_projeto'";         

        $conn = conectar();

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $result = $conn->query($sql);

        if (($result == TRUE) && ($result->num_rows > 0)) {
            
            $row = $result->fetch_assoc();

            echo '<form name="formulario" action="./projetos/alterarDadosForm.php" method="POST">
						<table id="tabela_cadastro">
							<tr>
								<td>Id:</td>
								<td><input type="text" name="id_projeto" value="' . $row["id_projeto"] . '"><br></td>
							</tr>
							<tr>
								<td>Nome:</td>
								<td><input type="text" name="nome" value="' . $row["nome"] . '"><br></td>
							</tr>
							<tr>
								<td>Data de início: </td>
								<td><input type="text" name="dataInicio" value="' . dateFormatBrazil($row["data_inicio"]) . '"></td>
							</tr>
							<tr>
								<td>Data de término: </td>
								<td><input type="text" name="dataTermino" value="' . dateFormatBrazil($row["data_termino"]) . '"></td>
							</tr>
							<tr>
								<td><input type="submit" value="Enviar"></td>
								<td><input type="reset" value="Limpar"></td>
							</tr>
							</table>
                                      </form>';
        }

        $conn->close();
    }
    ?>
</div>
