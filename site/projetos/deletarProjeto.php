<?php
include 'functions.php';

$id_projeto = filter_input(INPUT_GET, "idProjeto");
$sql = "SELECT * FROM usuario u WHERE u.id_usuario = $idUsuario;";         
$result = $conn->query($sql);

if(isset($id_projeto) && $id_projeto != "") {
    $conn = conectar();
    
    $sql = "DELETE FROM projeto WHERE id_projeto = $id_projeto";
    
    if ($conn->query($sql)) {
        echo "<script>alert('New record created successfully');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
header("Location: ./?page=projetos");