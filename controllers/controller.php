<?php

    $id = 1;
    $url = 'assets/xml/source.xml';
    $simpleXml = simplexml_load_file($url);


    if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['id']) && $_GET['id'] >= 1 && $_GET['id'] <= 4) {

        $id = intval($_GET['id']);

        $actualPage =  'page'.($id-1) . $simpleXml->page[$id-1]->content;
        $titlePage  = $simpleXml->page[$id-1]->title;
        echo $titlePage;

    } else {

        $actualPage = 'page de garde'.$simpleXml->page[$id-1]->content;
        $titlePage  = $simpleXml->page[$id-1]->title;
    }


?>