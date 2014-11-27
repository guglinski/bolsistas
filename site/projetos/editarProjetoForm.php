<?php

include "../functions.php";

//$sql = "";
$conn = conectar();

$idProjeto = filter_input(INPUT_POST, "idProjeto");
$nome = filter_input(INPUT_POST, "nome");
$dataInicio = filter_input(INPUT_POST, "dataInicio");
$dataTermino = filter_input(INPUT_POST, "dataTermino");

if ((isset($idProjeto) && ($idProjeto != "")) && 
    (isset($nome) && $nome != "") && 
    (isset($dataInicio) && $dataInicio != "") && 
    (isset($dataTermino) && $dataTermino != "")) {
    
    $sql = "UPDATE projeto p SET p.nome = '$nome', "
            . "p.data_inicio = '$dataInicio', "
            . "p.data_termino = '$dataTermino' "
            . "WHERE p.id_projeto = $idProjeto";
}

if ($sql != "" && $conn->query($sql)) {
    $conn->close();
    header("Location: ../?page=projetos");
} else {
    // Tratamento de erros
    $conn->close();
    header("Location: ../?page=projetos&erro=1");
}