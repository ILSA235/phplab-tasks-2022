<?php

namespace strings;

class Strings implements StringsInterface
{
	public function snakeCaseToCamelCase(string $input): string
	{
		$vrb = $input;	
		$vrb = strtr($vrb,"_"," ");
		$vrb = ucwords($vrb);
		$vrb = lcfirst($vrb);
		$vrb = str_replace(" ","",$vrb);
		return $vrb;
	}
	
	public function mirrorMultibyteString(string $input): string
	{
		$input = iconv('utf-8', 'utf-16le', $input);
		$input = strrev($input);
		$input = iconv('utf-16be', 'utf-8', $input);
		$input = explode( ' ', $input);
		krsort($input, SORT_NUMERIC);
		$input = implode(' ', $input);
		return $input;
	}
	
	public function getBrandName(string $noun): string
	{
		if ($noun[0] === $noun[-1]) {
			return ucfirst($noun) . substr($noun, 1);
		} else if ($noun[0] != $noun[-1]) {
			return "The" . " " . ucfirst($noun);
		}
	}
}