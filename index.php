<?php
$og_url = urldecode(base64_decode($_GET['url']));
include('simple_html_dom.php');
$html = file_get_html($og_url);
foreach($html->find('a') as $element){
    $url = $element->href;
    if (str_contains($url, 'https://download'))
    {
        $headers = get_headers($url);
        $type = $headers[10];
        header('Content-Type: application/json; charset=utf-8');
        echo "{\"url\":\"$url\", \"type\":\"$type\"}";
        exit;
    }
}
?>
