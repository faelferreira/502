#!/usr/bin/php
<?php
#nome ,idade,linguagem
$replace = ['{}','{}','{}'];
$to = [ 'Hector','27','php'];


$linha = file('file.txt');

#foreach($linhas as $linha){
#echo str_replace($replace.$to. $linha);
	echo implode('',str_replace($replace, $to, $linhas));		

#}
