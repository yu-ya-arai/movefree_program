<?php


$str = 'うらにわにはにわにわとりがいる';
$cnt = 0;

$result = str_replace('にわ', 'ニワ', $str, $cnt);

print '置換後：' . $result . PHP_EOL;
print '置換回数：cnt=' . $cnt . PHP_EOL;
