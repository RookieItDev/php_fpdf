<?php
require('/fpdf.php');
$pdf = new PDF_BARCODE('L','mm',array(100,100  ));//กำหนด W : H 100*100 ไม่สามารถปรับสูงกับกว้างได้
$pdf->AddPage();

//EAN13 test
$pdf->EAN13(10,10,'123456789012',5,0.5,9);
$pdf->Output();
?>