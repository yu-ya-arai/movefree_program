<?php

$line = "1995/06/08\t/sample.php\tUA";

$array = explode("\t", $line);
print_r($array);

echo implode(' | ', $array) . PHP_EOL;
