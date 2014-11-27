<?php
include 'functions.php';

$id_projeto = filter_input(INPUT_GET, "id_projeto");

if(isset($id_projeto) && $id_projeto != ""){
    $conn = conectar();
    
    $sql = 'DELETE FROM projeto WHERE id_projeto = "'.$id_projeto.'"';
    
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
    
    header("Location: ./?page=projetos");
}
?>
