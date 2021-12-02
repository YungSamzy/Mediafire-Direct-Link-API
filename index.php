<?php
/* MADE BY https://github.com/YungSamzy */
$og_url = urldecode(base64_decode($_GET['url']));
include('simple_html_dom.php');
$html = file_get_html($og_url);
foreach($html->find('a') as $element){
    $url = $element->href;
    if (str_contains($url, 'https://download'))
    {
        print_r($url);
        exit;
    }
}
?>