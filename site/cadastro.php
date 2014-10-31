           
                <form name="cadastroBolsista" action="<?php $_SERVER['PHP_SELF']; ?>" method="get">
                    <table>
                        <tr>
                            <td><label>Nome:</label></td>
                            <td><input type="text" name="nomeBolsista" value=""/></td>
                        </tr>
                        <tr>
                            <td><label>Salário:</label></td>
                            <td><input type="text" name="salarioBolsista" value=""/></td>
                        </tr>
                        <tr>
                            <td><label>E-mail</label></td>
                            <td><input type="text" name="emailBolsista" value=""/></td>
                        </tr>
                        <tr>
                            <td><label>Telefone:</label></td>
                            <td><input type="text" name="telefoneBolsista" value=""/></td>
                        </tr>
                    </table>
                    <input type="submit" value="Cadastrar" name="cadastrarBolsista"/>
                    <input type="reset" value="Limpar campos" name="resetCampos"/>
                </form>
                
                <?php
                    $nomeBolsista = filter_input(INPUT_GET, 'nomeBolsista');
                    $salarioBolsista = filter_input(INPUT_GET, 'salarioBolsista');
                    $emailBolsista = filter_input(INPUT_GET, 'emailBolsista');
                    $telefoneBolsista = filter_input(INPUT_GET, 'telefoneBolsista');
                    
                    $host = "localhost";
                    $user = "root";
                    $password = "";
                    $database = "mydb";
                    
                    if ((isset($nomeBolsista) && ($nomeBolsista != "")) && (isset($salarioBolsista) && $salarioBolsista != "")
                            && (isset($telefoneBolsista) && $telefoneBolsista != "")  && (isset($emailBolsista) && $emailBolsista != "")) {
                        $sql = "INSERT INTO bolsista (nome, salario, email, telefone) VALUES ('$nomeBolsista','$salarioBolsista','$emailBolsista','$telefoneBolsista')";
                        
                        $conn = new mysqli($host, $user, $password, $database);
                        
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        if ($conn->query($sql) === TRUE) {
                            echo "<script>alert('Registro inserido com sucesso !');</script>";
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }

                        $conn->close();                        
                    }
               ?>  
            