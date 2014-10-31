<?php		
		define ('FPDF_FONTPATH', 'font/'); // segundo é o diretorio das fontes
                require('fpdf.php');


                $host = "localhost";
                $user = "root";
                $password = "";
                $database = "mydb";

                
 $sql = "SELECT * FROM bolsista";
     
     
$conn = new mysqli($host, $user, $password, $database);
    
// Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $result = $conn->query($sql);


//Criando PDF
$pdf = new FPDF();
$pdf - Open();
$pdf->AddPage('P', 'A4');

// Estilizando PDF
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(90, 7, 'ID', 1);
$pdf->Cell(90, 7, 'Nome', 1);
$pdf->Cell(90, 7, 'Salario', 1);
$pdf->Cell(90, 7, 'Email', 1);
$pdf->Cell(90, 7, 'Telefone', 1);
$pdf->Ln();

$pdf->SetFont('Arial', '', 11); 

//Escrevendo no PDF os arquivos do banco
while ($row = $result->fetch_assoc()) {
    
    $pdf->Cell(90, 6, $row["id_bolsista"], 1);
    $pdf->Cell(90, 6, $row["nome"], 1);
    $pdf->Cell(90, 6, $row["salario"], 1);
    $pdf->Cell(90, 6, $row["email"], 1);
    $pdf->Cell(90, 6, $row["telefone"], 1);

    $pdf->Ln();

}
//Fazer DL forçado
$pdf->Output('pessoas.pdf', 'D');


$conn->close();

?>