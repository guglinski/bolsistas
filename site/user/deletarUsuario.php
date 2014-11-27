<?php

include "functions.php";

$conn = conectar();
                
$idUsuario = filter_input(INPUT_GET, 'idUsuario');

$sql = "SELECT * FROM usuario u WHERE u.id_usuario = $idUsuario;";         
$result = $conn->query($sql);

if (($result == TRUE) && ($result->num_rows > 0)) {
    
    $sql = "DELETE FROM usuario WHERE id_usuario = $idUsuario;";
    
    if ($conn->query($sql)) {
        $conn->close();
        header("Location: ../?page=usuarios");
    }
}

// Tratamento de erros
$conn->close();
header("Location: ?page=usuarios");
