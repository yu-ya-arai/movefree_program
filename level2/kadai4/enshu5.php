<?php

$exp = '3E2';


switch ($exp) {
    case 300:
        $a = 'switch:300';
        break;
    case '3E2':
        $a = 'switch:3E2';
        break;
    default:
        $a = 'switch:default';
        break;
}

$b = match ($exp) {
    300   => 'match:300',
    '3E2' => 'match:3E2',
    default => 'match:default',
};

print $a . '|' . $b;

?>
