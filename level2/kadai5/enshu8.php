<?php

$files = ['img15.png','img5.png','img2.png','img18.png','img3.png'];

// 文字列としてソート
$files_string = $files;
sort($files_string, SORT_STRING);
print_r($files_string);

// 自然順ソート
$files_natural = $files;
sort($files_natural, SORT_NATURAL);
print_r($files_natural);
