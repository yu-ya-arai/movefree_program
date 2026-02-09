<?php


$str = 'PHP エンジニア';

echo 'mb_strlen=' . mb_strlen($str) . PHP_EOL;
echo 'strlen=' . strlen($str) . PHP_EOL;

/*
結果が違う理由：
UTF-8では日本語は1文字が複数バイトで表現される。
mb_strlenはUTF-8を考慮して文字数を数えるが、
strlenはUTF-8を考慮せずバイト数を数えるため、結果が異なる。
*/
