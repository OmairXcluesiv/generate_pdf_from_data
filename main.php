<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
  <style>
   .marginright5>span{font-size: 15px !important;}
  </style>
<?php
$html_print = "
require_once('mpdf/mpdf.php'); // lib for pdf reports
require 'scraperwiki/scraperwiki.php'; // lib for datascrap from olx source
require 'scraperwiki/simple_html_dom.php';
";
$count = "";
$html = scraperwiki::scrape('https://www.olx.com.pk/cars/');
$dom = new simple_html_dom();
$dom->load($html);

$check = $dom->find("strong[class=c000]");  // get the ads title
$check_title = $dom->find("h3[class=large]"); // get the price of cars
$find_count = count($check); // check the no of tags in html and will get the value and intiate the loop 

    echo "<center><img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_TXu7QOilJibksBdADNiHxd1Dkvoq5lPYvmdZwaJBPxCaemAH'></center>";
    echo "<table class='table'>";
    echo "<thead><th>Ad Title</th>";
    echo "<th align='right'>Price(Rs)</th></thead>";
    
for($i=0;$i<=$find_count;$i++){  
    $dmi = array($check_title);
    $dmii = array($check);
    echo  "<tbody><tr><td>" . $check_title[$i] ."</td><td align='right'>". $check[$i]. "</td></tr></tbody>";
}
    $data1= "</table>";

?>
