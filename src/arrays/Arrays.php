<?php

namespace arrays;

class Arrays implements ArraysInterface
{
	public function repeatArrayValues(array $input): array
	{
		$values = [];
		for($i=0;$i<count($input);$i++) {
			for($j=0;$j<$input[$i];$j++) {
				$values[] = $input[$i];
			}
		}
		return $values;
	}
	public function getUniqueValue(array $input): int
	{
		$values = array_unique($input);
		return $values;
	}
	public function groupByTag(array $input): array
	{
		$vrb = [];
		for($i=0;$i<count($input);$i++) {
			$vrb = [$input[$i]['name'] => $input[$i]['tags']];
			//print_r($vrb);
		}
		$keys = array_keys($vrb);
		print_r($keys);
		$vals = array_values($vrb);
		
		
	}
}