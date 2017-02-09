<? 

require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';

$counter = 0;
$data_till = 35;

$html = scraperwiki::scrape('https://www.olx.com.pk/cars/');
$dom = new simple_html_dom();
$dom->load($html);

for($i=0;$i<=$data_till;$i++){
$title = array($dom->find("strong.c000"));
print_r($title);
$counter++;
}
echo "Total Record Fetched: " . $counter;
 







?>
