<?php

session_start();
include "./functions.php";

$conn = conectar();

$nomeBolsista = filter_input(INPUT_POST, 'nomeBolsista');
$salarioBolsista = filter_input(INPUT_POST, 'salarioBolsista');
$emailBolsista = filter_input(INPUT_POST, 'emailBolsista');
$telefoneBolsista = filter_input(INPUT_POST, 'telefoneBolsista');

if ((isset($nomeBolsista) && ($nomeBolsista != "")) && 
        (isset($salarioBolsista) && $salarioBolsista != "") && 
        (isset($telefoneBolsista) && $telefoneBolsista != "")  && 
        (isset($emailBolsista) && $emailBolsista != "")) {
    
    $sql = "INSERT INTO bolsista (nome, salario, email, telefone) VALUES ('$nomeBolsista','$salarioBolsista','$emailBolsista','$telefoneBolsista')";
    $conn->query($sql);
    
    $conn->close();
}

header("Location: ./index.php?page=cadastroBolsista");