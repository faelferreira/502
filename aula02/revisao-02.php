<?php
 while(true){

 	$data = readline('Digite um textiho: ');
 	file_put_contents('file.txt', "$data\n");
 }