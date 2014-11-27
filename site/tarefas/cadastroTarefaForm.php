<?php

include "../functions.php";

$nomeTarefa = $_POST['nomeTarefa'];
$dataInicio = $_POST['dataInicio'];
$dataTermino = $_POST['dataTermino'];
$id_projeto = $_POST['id_projeto'];

if( (isset ($id_projeto) && $id_projeto != "") && (isset($nomeTarefa) && $nomeTarefa != "") && (isset($dataInicio) && $dataInicio != "") && (isset($dataTermino) && $dataTermino != "")){
    
    $conn = conectar();
    
    $sql = 'INSERT INTO tarefa (id_projeto,nome,data_inicio,data_termino) VALUES ("'.$id_projeto.'","'.$nomeTarefa.'","'.dateFormatDB($dataInicio).'","'.dateFormatDB($dataTermino).'")';
    
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
    
    header("Location: ./?page=cadastrarTarefa");
}

?>