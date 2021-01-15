<?php

    $id = null;
    $url = 'assets/xml/source.xml';
    $simpleXml = simplexml_load_file($url);

    //var_dump($simpleXml);


    if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['id']) && $_GET['id'] >= 1 && $_GET['id'] <= 4) {

        $id = intval($_GET['id']);
        
        $contentPage = $simpleXml->page[$id-1]->content;
        $titlePage  = $simpleXml->page[$id-1]->title;

    } else {
        //au demarrage du site c'est la page d'accueil
        $contentPage = $simpleXml->page[0]->content;
        $titlePage  = $simpleXml->page[0]->title;
    
    }


?>