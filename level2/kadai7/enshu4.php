<?php


$now = new DateTime();
print $now->format('Y-m-d H:i:s') . "\n";



$dtFromString = new DateTime('2025/09/17 21:52:38');
print $dtFromString->format('Y年m月d日 H時i分s秒') . "\n";



$dtLondon = new DateTime(null, new DateTimeZone('Europe/London'));
print $dtLondon->format('Y-m-d H:i:s (T)') . "\n";