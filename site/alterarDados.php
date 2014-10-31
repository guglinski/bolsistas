<?php

$id_bolsista = $_POST["id_bolsista"];
$nome = $_POST["nome"];
$salarioBolsista = $_POST["salario"];
$email = $_POST["email"];
$telefoneBolsista = $_POST["telefone"];

$host = "localhost";
$user = "root";
$password = "";
$database = "mydb";

if ((isset($nome) && ($nome != "")) && (isset($salarioBolsista) && $salarioBolsista != "") && (isset($email) && $email != "") && (isset($telefoneBolsista) && $telefoneBolsista != "")) {

    $sql = "UPDATE bolsista b SET b.nome = '$nome' AND
			b.salario = '$salarioBolsista' AND b.email = '$email' AND b.telefone = '$telefoneBolsista' WHERE b.id_bolsista = '$id_bolsista'";

    $conn = new mysqli($host, $user, $password, $database);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    if ($conn->query($sql) == TRUE) {
        echo "<script>New record created successfully</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
        
    $conn->close();
    
    header("Location: /site/index.php?page=alterarDadosBolsista");
}
?>
