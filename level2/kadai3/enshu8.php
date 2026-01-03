<?php
$book = [
    'title' => '草枕',
    'author' => [
        'name' => '夏目漱石',
        'address' => '熊本県',
    ],
];


['name' => $name, 'address' => $address] = $book['author'];

print $name . '|' . $address;
