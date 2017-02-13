<?php

include("mpdf/mpdf.php");
 
$mpdf=new mPDF('c','A4','','' , 0 , 0 , 0 , 0 , 0 , 0); 
 
$mpdf->SetDisplayMode('fullpage');
 
$mpdf->list_indent_first_level = 0;  // 1 or 0 - whether to indent the first level of a list
 
 $opts = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n"
  )
);

$context = stream_context_create($opts);
$mpdf->WriteHTML(file_get_contents('invoice.php', false, $conte));

$mpdf->Output();

?>