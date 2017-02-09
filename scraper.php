<? 

require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';

$counter = 0;
$html = scraperwiki::scrape('https://www.olx.com.pk/cars/');
$dom = new simple_html_dom();
$dom->load($html);

$title = $dom->find("h3.large");
if(!empty($title)){
  $counter++;
}
echo $counter;





?>
