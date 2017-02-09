<? 

require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';

$counter = 0;
$html = scraperwiki::scrape('https://www.olx.com.pk/cars/');
$dom = new simple_html_dom();
$dom->load($html);

while($counter<=35){
$title = array($dom->find("h3.large"));
$counter++;
}
echo $counter;
for($i=0;$i=$counter;$i++){
 echo $title[$i];
}






?>
