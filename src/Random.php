<?php
declare(strict_types=1);

namespace LubovVasileva\OtusComposerPackage;

class Random
{
	//$begin=0;
	public static function getRand($min, $max)
	{
	$begin = file_get_contents('random.txt');
	$result = (5*$begin+3)%1239;
	file_put_contents('random.txt', "$result");
	$result = (int)($min + ($result/1239)*($max - $min));
	return $result;
	}
}
