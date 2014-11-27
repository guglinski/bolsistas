<?php

include "../functions.php";

$conn = conectar();
$sql = "";

$nome = filter_input(INPUT_POST, 'nome');
$salario = filter_input(INPUT_POST, 'salario');
$email = filter_input(INPUT_POST, 'email');
$telefone = filter_input(INPUT_POST, 'telefone');
$coordenador = filter_input(INPUT_POST, 'coordenador');

if (isset($nome) && ($nome != "")) {
    if (isset($coordenador) && $coordenador) {
        $sql = "INSERT INTO coordenador (nome) VALUES ('$nome')";
        
    } else if ((isset($salario) && $salario != "") && 
        (isset($telefone) && $telefone != "")  && 
        (isset($email) && $email != "")) {
        $sql = "INSERT INTO bolsista (nome, salario, email, telefone) VALUES ('$nome','$salario','$email','$telefone')";
    }
}

if ($sql != "" && $conn->query($sql)) {
    $conn->close();
    header("Location: ../?page=cadastro");
} else {
    $conn->close();
    header("Location: ../?page=cadastro&error=1");
}
