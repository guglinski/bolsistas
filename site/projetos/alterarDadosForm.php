<?php

include "../functions.php";

$id_projeto = $_POST["id_projeto"];
$nome = $_POST["nome"];
$dataInicio = $_POST["dataInicio"];
$dataTermino = $_POST["dataTermino"];

if ((isset($nome) && ($nome != "")) && (isset($dataInicio) && $dataInicio != "") && (isset($dataTermino) && $dataTermino != "")) {

    $sql = 'UPDATE projeto p SET p.nome = "'.$nome.'" ,
			p.data_inicio = "'.dateFormatDB($dataInicio).'" , p.data_termino = "'.dateFormatDB($dataTermino).'" WHERE p.id_projeto = "'.$id_projeto.'"';
    
    $conn = conectar();   
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    if ($conn->query($sql) == TRUE) {
        echo "<script>alert('New record created successfully');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
        
    $conn->close();
    
    header("Location: /site/index.php?page=projetos");
} 
?>
