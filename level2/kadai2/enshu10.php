<?php
$bin_str = '0b1001101';
$oct_str = '0777';
$hex_str = '0xFF';

$b10 = bindec($bin_str);
$o10 = octdec($oct_str);
$h10 = hexdec($hex_str);

print $b10 . '|' . $o10 . '|' . $h10;
