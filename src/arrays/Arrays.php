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
        $values = array_count_values($input);
        if($values != []) {
            $out = array_keys($values,1);
            if($out != []) {
                $out = min($out);
            } else {
                $out = 0;
            }
        } else{
            $out = 0;
        }

        return $out;
	}
	
	public function groupByTag(array $input): array
	{
		foreach($input as $var) {
			foreach($var['tags'] as $arr) {
				$tag_arr[] = $arr;
			}
		}
		$tag_arr = array_unique($tag_arr);
		$mas = array();
		foreach($tag_arr as $var){
			array_push($mas, $var);
		}
		$sum = array();
		for($i=0;$i<count($mas);$i++) {
			for($j=0;$j<count($input);$j++) {
				for($k=0;$k<count($input[$j]['tags']);$k++) {
					if($mas[$i] === $input[$j]['tags'][$k]) {
						array_push($sum	,$input[$j]['name']);
					}
					
				}
			} 
			sort($sum);
			$fin[$mas[$i]] = $sum;
			$sum = [];
		}
		ksort($fin);
		return $fin;
	}
}