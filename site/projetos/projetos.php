<div id="projetosAtivos">
    <p style="font-weight: bold;">Os seguintes projetos estão ativos : </p>
    
    <?php
    
    include 'functions.php';
    
    $nomeProjeto = filter_input(INPUT_GET, 'nomeBolsista');
    
    if (($nomeProjeto != "") && (isset($nomeProjeto))) {
        $sql = "SELECT * FROM projeto p WHERE p.nome LIKE '$nomeProjeto' ORDER BY p.id_projeto ";
    } else {
        $sql = "SELECT * FROM projeto p ORDER BY p.id_projeto ";
    }
    
    $conn = conectar();

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query($sql);

    echo "<br><br>";
    
    echo "<table id=\"tableId\" style=\"width:80%; border: 1px solid black; position: relative;"
    . " margin: auto; padding: 0px; \">"
    . "<tr id=\"tableId\">"
    . "<th>Id</th>" . "<th>Nome</th>" . "<th>data de início</th>" . "<th>data de término</th>"
    . "</tr>";

    if (($result != FALSE) && ($result->num_rows > 0)) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id_projeto"] . "</td>";
            echo "<td>" . $row["nome"] . "</td>";
            echo "<td>" . dateFormatBrazil($row["data_inicio"]) . "</td>";
            echo "<td>" . dateFormatBrazil($row["data_termino"]) . "</td>";
            echo "<td><a href=\"?page=editarProjeto&id_projeto=" . $row["id_projeto"] . "\"><button>Editar</button></a></td>";
            echo "<td><a href=\"?page=deletarProjeto&id_projeto=" . $row["id_projeto"] . "\"><button>Deletar</button></a></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }

    echo "</table>";

    $conn->close();
    ?>  
</div>