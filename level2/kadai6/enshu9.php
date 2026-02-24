<?php


function getTriangleArea(float $base, float $height): float {
    return $base * $height / 2;
}

$funcName = 'getTriangleArea';
$area = $funcName(8, 10);

print "area={$area}\n";



function myArrayWalk(array $array, callable $func): void {
    foreach ($array as $key => $value) {
        $func($value, $key);
    }
}



$data = [100, 50, 10, 5];
$result = 0;

myArrayWalk($data, fn($value, $key) => $result += $value);

print "arrow={$result}\n";


$result = 0;

myArrayWalk($data, function($value, $key) use (&$result) {
    $result += $value;
});

print "closure={$result}\n";