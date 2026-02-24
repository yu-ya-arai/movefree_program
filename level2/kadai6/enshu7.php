<?php

// (1) 参照渡しの関数
function addSuffix(string &$name, string $suffix = 'さん'): void {
    $name = $name . $suffix;
}

// (2) 1個以上必須の可変長引数関数
function total(float $first, float ...$rest): float {
    $result = $first;
    foreach ($rest as $value) {
        $result += $value;
    }
    return $result;
}

// (3) メイン処理

$name = '山田';
addSuffix($name);   // 既定値 'さん' を使用
print "name={$name}\n";

$numbers = [7, 3, 10];
$sum = total(...$numbers);   // アンパック
print "sum={$sum}\n";