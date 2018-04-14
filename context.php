#!/usr/bin/php
<?php

$obj =  new stdClass();
$obj->sobre_p ='ola ola olaa';
$json =  json_encode($obj);

$options =[ 'http'=>[
	'method'=> ' put',
	'header' => 'Content- Type:application/json',
	'content'=>$json
]];
$context =  stream_context_create($options);
$status = file_get_contents('http://phpypesh.com.br/blog/api/pagina/6',$context);
echo $satus;


