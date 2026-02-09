<?php

$x = '101'; 
var_dump(is_int($x));
var_dump(is_numeric($x));

print "----\n";

$n = (int)$x;

var_dump(is_int($n));
