<?php

$language = 'PHP';

switch ($language) {
    case 'Python':
    case 'PHP':
    case 'Ruby':
        echo "インタプリター言語";
        break;

    case 'C#':
    case 'Java':
        echo "コンパイル言語";
        break;

    default:
        echo "不明";
        break;
}

?>
