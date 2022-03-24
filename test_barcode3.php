<?php

require('fpdf.php');
//require('fpdf.php'); // แทรกไฟล์ที่เก็บฟังก์ชันของไฟล์  PDF

$pdf=new FPDF('P','mm',array(150,150 ));
$pdf->AddPage();
$pdf->AddFont('sarabun','B','THSarabunB.php'); // แทกฟอนต์  (sarabun เรากำหนดเป็นชื่ออะไรก็ได้)  ฟอนต์ตัวหนา
$pdf->AddFont('sarabun','','THSarabun.php'); // ฟอนต์ตัวปกติ
    for($i=1;$i<=10;$i++){
        $code='123456789012';
     
        $pdf->SetXY(5,20,150,15);//ความห่างของตัวอักษร
        $pdf->Write(5,'ตัวอย่าง1: "'.$code.' "    " B Set: "'.$code.'"'." ");
        $pdf->Write(5,'A set: "'.$code.' "    " B Set: "'.$code.'"'." ");
        //echo "<p class='inline'><span ><b>Item: fff</b></span>'".Code128(5,3,$code,90,15)."'<span ><b>Price: ".$rate." </b><span></p>&nbsp&nbsp&nbsp&nbsp";
       if($i == 10)
       {
        break;  
       }
        $pdf->AddPage();
       
    }
    $pdf->Output();
?>