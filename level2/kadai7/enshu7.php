<?php


$ts = time();
print date('Y-m-d H:i:s', $ts) . "\n";



for ($d = 1; $d <= 31; $d++) {
    if (checkdate(2, $d, 2028)) {
        print sprintf('%04d-%02d-%02d', 2028, 2, $d) . "\n";
    }
}