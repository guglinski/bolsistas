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
        $sql = "INSERT INTO usuario (nome, coordenador) VALUES ('$nome', 1)";
        
    } else if ((isset($salario) && $salario != "") && 
        (isset($telefone) && $telefone != "")  && 
        (isset($email) && $email != "")) {
        $sql = "INSERT INTO usuario (nome, salario, email, telefone, coordenador) VALUES ('$nome','$salario','$email','$telefone', 0)";
    
    } else {
        // Tratamento de erros
    }
}

if ($sql != "" && $conn->query($sql)) {
    $conn->close();
    header("Location: ../?page=cadastro");
} else {
    $conn->close();
    header("Location: ../?page=cadastro&error=1");
}
