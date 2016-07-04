<?php
error_reporting(E_ALL);

include __DIR__."/wkhtmltox/wkhtmltopdf.php";

$pdf = new WkHtmlToPdf();
$content = '<html><body>Hello World</body></html>';
//$content = $pdf->curlGetData("www.google.com", array('q'=>'hello'));
//echo $content;exit;
$pdf->addPage($content);
$pdf->send('/home/nginx/domains/paycheckstubonline.com/public/p.pdf');
echo "asdf";