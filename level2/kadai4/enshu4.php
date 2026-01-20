<?php

$language = 'PHP';

$type = match ($language) {
    'Python', 'PHP', 'Ruby' => 'インタプリター言語',
    'C#', 'Java'            => 'コンパイル言語',
    default                => '不明',
};

print $type;

?>
