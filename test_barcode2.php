<?php
require('code128.php');

$pdf=new PDF_Code128('P','mm',array(100,100 ));
$pdf->AddPage();
$pdf->SetFont('Arial','',10);
// for ($x = 0; $x <= 10; $x++) {
//     $code='123456789012';
//     $pdf->Code128(5,3,$code,90,15);//ตำแหน่ง 1 = ห่างจากซ้าย , ตำแหน่ง 2 = ห่างจากบน , ตำแหน่ง 3 = ความกว้าง barcode , ตำแหน่ง 4 = ขนาด Font 
//     $pdf->SetXY(5,20,150,15);//ความห่างของตัวอักษร
//     $pdf->Write(5,'A set: "'.$code.' "    " B Set: "'.$code.'"'." ");
//     $pdf->Write(5,'A set: "'.$code.' "    " B Set: "'.$code.'"');
//     $pdf->Ln();}
  

    for($i=1;$i<=10;$i++){
        $code='123456789012';
        $pdf->Code128(5,3,$code,90,15);//ตำแหน่ง 1 = ห่างจากซ้าย , ตำแหน่ง 2 = ห่างจากบน , ตำแหน่ง 3 = ความกว้าง barcode , ตำแหน่ง 4 = ขนาด Font 
        $pdf->SetXY(5,20,150,15);//ความห่างของตัวอักษร
        $pdf->Write(5,'A set: "'.$code.' "    " B Set: "'.$code.'"'." ");
        //echo "<p class='inline'><span ><b>Item: fff</b></span>'".Code128(5,3,$code,90,15)."'<span ><b>Price: ".$rate." </b><span></p>&nbsp&nbsp&nbsp&nbsp";
        $pdf->AddPage();
        $pdf->Ln();
    }
    
    $pdf->Output();

  
//   for ($x = 0; $x <= 10; $x++) {
//     $pdf->Write('The number is:"'.$code.'");
 



// //B set
// $code='Code 128';
// $pdf->Code128(50,70,$code,80,20);
// $pdf->SetXY(50,95);
// $pdf->Write(5,'B set: "'.$code.'"');

// //C set
// $code='12345678901234567890';
// $pdf->Code128(50,120,$code,110,20);
// $pdf->SetXY(50,145);
// $pdf->Write(5,'C set: "'.$code.'"');

// //A,C,B sets
// $code='ABCDEFG1234567890AbCdEf';
// $pdf->Code128(50,170,$code,125,20);
// $pdf->SetXY(50,195);
// $pdf->Write(5,'ABC sets combined: "'.$code.'"');

$pdf->Output();
?>