<?php
	$star=10;
	for($a=1; $a<=$star; $a++){
	for($b=$star; $b>=$a; $b-=1){
	}
	for($c=1; $c<=$a; $c++){
		echo "*";
	}
	echo "\n";
	}
	for($a=1; $a<=$star; $a++){
	for($b=1; $b<=$a; $b++){
	}
	for($c=$star; $c>=$a; $c-=1){
		echo "*";
	}
	echo "\n";
	}
?>