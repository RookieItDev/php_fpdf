<?php
require_once("fpdf.php");

require_once("phpqrcode/qrlib.php");

QRcode::png($_GET['code']);
?>