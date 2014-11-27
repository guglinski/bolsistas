<?php

include "../functions.php";

$conn = conectar();

$nomeProjeto = filter_input(INPUT_POST, 'nomeProjeto');
$dataInicio = filter_input(INPUT_POST, 'dataInicio');
$dataTermino = filter_input(INPUT_POST, 'dataTermino');

if((isset($nomeProjeto) && $nomeProjeto != "") && 
    (isset($dataInicio) && $dataInicio != "") && 
    (isset($dataTermino) && $dataTermino != "")) {
    
//    $dataInicio = dateFormatBrazil($dataInicio);
//    $dataTermino = dateFormatBrazil($dataTermino);
    
    $sql = "INSERT INTO projeto (nome, data_inicio, data_termino) VALUES ('$nomeProjeto', '$dataInicio', '$dataTermino');";   
    if ($conn->query($sql)) {
        $conn->close();
        header("Location: ../?page=cadastrarProjeto");
    } else {
        $conn->close();
        header("Location: ../?page=cadastrarProjeto&erro=1");
    }
}