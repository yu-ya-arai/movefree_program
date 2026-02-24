<?php


function getRectangleArea(float $width = 5, float $height = 2): float {
    return $width * $height;
}



$area1 = getRectangleArea();
$area2 = getRectangleArea(10);

$area3 = getRectangleArea(height: 10);   
$area4 = getRectangleArea(height: 3, width: 4); 

print "area1={$area1}\n";
print "area2={$area2}\n";
print "area3={$area3}\n";
print "area4={$area4}\n";