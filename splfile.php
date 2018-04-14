#!/usr/bin/php
<?php

#$f=new SplFileObject('spl.txt','r');
#flock($f,LOCK_EX);

#while$($f = fgets($f)){
#	$data = readline('Digite uma lina de texto');
#	$file->fwrite("$data\n");
#	$l;
#}

$file = new  SplFileObject('spl.txt','r' );
echo $file->getMaxLineLen();


while($l = $file->fgets())
	print($l);
