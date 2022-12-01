<?php

$filecontent = file_get_contents('input.txt');
/* $filecontent = file_get_contents('input1.txt'); */


$listArray = explode("\n", $filecontent);

$sums = [];
$values = 0;
foreach($listArray as $item) {
    if (!empty($item)) {
        $values += (int) $item;
    } else {
        $sums[] = $values;
        $values = 0;
        continue;
    }
}

rsort($sums);

$maxValue = max($sums);

var_dump($maxValue);

var_dump(array_sum([$sums[0], $sums[1], $sums[2]]));
