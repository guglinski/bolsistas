<div>
    <form name="cadastroTarefa" action="./tarefas/cadastroTarefaForm.php" method="POST" enctype="multipart/form-data">
        <table border="1">
            <thead>
                <tr>
                    <th>Cadastro de Tarefa 
                        <br><br></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nome da Tarefa</td>
                    <td><input type="text" name="nomeTarefa"/></td>
                </tr>
                <tr>
                    <td>Data de inÃ­cio</td>
                    <td><input type="date" name="dataInicio" value="" /></td>
                </tr>   
                <tr>
                    <td>Data de tÃ©rmino</td>
                    <td><input type="date" name="dataTermino" value="" /></td>
                </tr>
                <tr>
                    <td>Selecione o projeto relacionado</td>
                    <td><select name='id_projeto'>
                    <?php
                    
                        include '../functions.php';
                        
                        $sql = "SELECT * FROM projeto" ;
                        
                        $conn = conectar();
                        
                        // Check connection
                         if ($conn->connect_error) {
                              die("Connection failed: " . $conn->connect_error);
                        }

                         $result = $conn->query($sql);
                         
                         if (($result != FALSE) && ($result->num_rows > 0)) {
                             while ($row = $result->fetch_assoc()) {
                                 
                                 echo '<option value=" ' . $row["id_projeto"] . ' ">' . $row["nome"];
                                 
                             }
                         }
                             else {
                                 echo '0 results';
                             }
                        
                        
                         $conn->close();
                        ?>    
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" value="Cadastrar" name="cadastrar" /></td>
                    <td><input type="reset" value="Limpar" name="clear" /></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>