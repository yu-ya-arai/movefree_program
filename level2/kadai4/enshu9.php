<?php

echo "=== continue ===\n";

for ($i = 1; $i <= 3; $i++) {
    switch ($i) {
        case 1:
        case 3:
            $result = $i * $i;
            break;
        case 2:
            continue;
    }
    print "{$i} の2乗は {$result} です。\n";
}

echo "=== continue 2 ===\n";

for ($i = 1; $i <= 3; $i++) {
    switch ($i) {
        case 1:
        case 3:
            $result = $i * $i;
            break;
        case 2:
            continue 2;
    }
    print "{$i} の2乗は {$result} です。\n";
}
