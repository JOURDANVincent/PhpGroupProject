<?php

echo 'controller';

$url = 'assets/xml/source.xml';

$json = XML_TO_JSON($url);

//var_dump($json);


function XML_TO_JSON ($url) {

    $fileContents= file_get_contents($url);

    $fileContents = str_replace(array("\n", "\r", "\t"), '', $fileContents);

    $fileContents = trim(str_replace('"', "'", $fileContents));

    $simpleXml = simplexml_load_string($fileContents);

    var_dump($simpleXml);

    $json = json_encode($simpleXml);

    return $json;

}

?>





