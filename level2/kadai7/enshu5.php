<?php


$dt = new DateTime();
$dt->setDate(2026, 1, 1);
$dt->setTime(12, 34, 56);
print $dt->format('Y-m-d H:i:s') . "\n";



$dt->setTime(14, 70, 59); 
print $dt->format('Y-m-d H:i:s') . "\n";



$tsDt = new DateTime();
$tsDt->setTimestamp(time());
print $tsDt->format('Y-m-d H:i:s') . "\n";

print $tsDt->getTimestamp() . "\n";