<?php


for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 9; $j++) {
        if ($i * $j > 40) {
            break 2; 
        }
        echo ($i * $j) . ' ';
    }
    echo "\n";
}

echo "---\n";


for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 9; $j++) {
        if ($i * $j > 40) {
            goto end; 
        }
        echo ($i * $j) . ' ';
    }
    echo "\n";
}

end:
