<?php

    $id = 1;
    $url = 'assets/xml/source-julien.xml';
    $simpleXml = simplexml_load_file($url);

    if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['id']) && $_GET['id']>=1 && $_GET['id']<=4 ) {

        $id = $_GET['id'];

        $actualPage =  'page'.($id-1) . $simpleXml->page[$id-1]->content;

        
    } else {

        $actualPage = 'page de garde'.$simpleXml->page[0]->content;

    }


?>