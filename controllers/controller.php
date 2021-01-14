<?php

    $id = 1;
    $url = 'assets/xml/source-julien.xml';
    $simpleXml = simplexml_load_file($url);


    if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['id']) && $_GET['id'] >= 1 && $_GET['id'] <= 4) {

        $id = intval($_GET['id']);

        $contentPage = $simpleXml->page[$id-1]->content;
        $titlePage  = $simpleXml->page[$id-1]->title;

    } else {

        $contentPage = $simpleXml->page[$id-1]->content;
        $titlePage  = $simpleXml->page[$id-1]->title;
    }


?>