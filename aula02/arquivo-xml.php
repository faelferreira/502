#!/usr/bin/php
<?php

$content = file_get_contents('http://phpypesh.com.br/example.xml');
$xml = new SimpleXMLElement($content);

$apostila = $xml->addChild('apostila');
$apostila->addAttribute('versao', '1.0');
$apostila->titulo = 'Aulas incríveis com Hector';
$topicos = $apostila->addChild('topicos');
$topicos->addChild('topico', 'SUSE chocolate');
$topicos->addChild('topico', 'Ha ha ha ha');

file_put_contents('novo_xml.xml', $xml->asXML());