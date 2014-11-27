<?php

include "../functions.php";

$sql = "";
$conn = conectar();

$coordenador = filter_input(INPUT_POST, "coordenador");
$idUsuario = filter_input(INPUT_POST, "idUsuario");
$nome = filter_input(INPUT_POST, "nome");
$salario = filter_input(INPUT_POST, "salario");
$email = filter_input(INPUT_POST, "email");
$telefone = filter_input(INPUT_POST, "telefone");

if (isset($nome) && ($nome != "")) {
    if (isset($coordenador) && $coordenador) {
        $sql = "UPDATE usuario u "
                . "SET u.nome = '$nome' "
                . "WHERE u.id_usuario = '$idUsuario'";
        
    } else if ((isset($salario) && $salario != "") && 
        (isset($telefone) && $telefone != "")  && 
        (isset($email) && $email != "")) {
        $sql = "UPDATE usuario u "
                . "SET u.nome = '$nome', "
                . "u.salario = '$salario', "
                . "u.email = '$email', "
                . "u.telefone = '$telefone' "
                . "WHERE u.id_usuario = '$idUsuario'";
        
    } else {
        // Tratamento de erros
    }
}

if ($sql != "" && $conn->query($sql)) {
    $conn->close();
    header("Location: ../?page=usuarios");
} else {
    $conn->close();
    header("Location: ../?page=usuarios&error=1");
}