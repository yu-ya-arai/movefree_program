<?php

$score = 75;

if ($score >= 90) {
    $result = "優";
} elseif ($score >= 70) {
    $result = "良";
} elseif ($score >= 50) {
    $result = "可";
} else {
    $result = "不可";
}

echo "score={$score}: {$result}";

?>
