<?php

include "../functions.php";

$nomeProjeto = $_POST['nomeProjeto'];
$dataInicio = $_POST['dataInicio'];
$dataTermino = $_POST['dataTermino'];

if((isset($nomeProjeto) && $nomeProjeto != "") && (isset($dataInicio) && $dataInicio != "") && (isset($dataTermino) && $dataTermino != "")){
    
    $conn = conectar();
    
    $sql = 'INSERT INTO projeto (nome,data_inicio,data_termino) VALUES ("'.$nomeProjeto.'","'.dateFormatDB($dataInicio).'","'.dateFormatDB($dataTermino).'")';
    
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
    
    header("Location: /site/index.php?page=cadastrarProjeto");
}
?>

