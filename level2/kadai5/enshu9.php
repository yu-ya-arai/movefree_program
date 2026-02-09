<?php

$str = '彼の電話番号は0123-45-6789、私のは9876-54-3210です。';
$pattern = '/\d{4}-\d{2}-\d{4}/';

print "=== PREG_SET_ORDER ===\n";
preg_match_all($pattern, $str, $data, PREG_SET_ORDER);
var_dump($data);

print "=== PREG_PATTERN_ORDER ===\n";
preg_match_all($pattern, $str, $data, PREG_PATTERN_ORDER);
var_dump($data);

print "=== 1件ずつ表示（PATTERN_ORDER） ===\n";
for ($i = 0; $i < count($data[0]); $i++) {
    echo $data[0][$i] . PHP_EOL;
}
