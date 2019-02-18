<?
require_once 'phpQuery/phpquery-master/phpQuery/phpQuery.php';

$url = 'https://www.work.ua/jobs-dp-it/?advs=1';
//$url = 'http://code.mu/books/advanced/php/parsing/rabota-s-bibliotekoj-phpquery-v-php.html';

function parser($url)
{
    $file = file_get_contents($url);
    $doc = phpQuery::newDocument($file);
//    $data = $doc->find('div.container');
    foreach ($doc->find('#pjax-job-list') as $item) {
        $items = pq($item);
        $name = $items->find('h2.add-bottom-sm a');
//        print_r($items);
//        echo $items;
        var_dump($name);
    }
//    echo '<hr>';
//    echo $items;

}
parser($url);
//var_dump( parser($url));