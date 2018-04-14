#!/usr/bin/php
<?php
#mkdir('bunda');
#chmod('bunda', 0700);
#chown('bunda','root');
#chgrp('bunda','root');

#$stat = stat('bunda');

#var_dump($stat);

#touch('base.csv');
#unlink('base.csv');
#symlink(_FILE_,'abrao.php');
$files= glob('8.php');
print_($files);
foreach($files as $fil){
	$f = file_get_contents($fil);
	$end = strpos($f,'bunda');
	if($end !== false){
		$lines = file($fil);
		echo $lines."\n";
		for($i = 0;$i <4;++$i){
			echo $lines[$i];
			echo PHP_EOL;
			#$i=0;
			#foreach($line as $l){
			#echo $l;
			#lf(++$l>3){
			#breack;
			#}
			#}
			#
	}

}


