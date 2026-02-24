<?php


function readGroups(array ...$groups): Generator {
    $count = 0;

    foreach ($groups as $group) {
        $count += count($group);
        yield from $group;
    }

    return $count;
}



$group1 = ['A' => 'なまむぎ', 'B' => 'なまごめ'];
$group2 = ['C' => 'なまたまご'];

$gen = readGroups($group1, $group2);

foreach ($gen as $key => $value) {
    print "{$key} : {$value}\n";
}

print "count={$gen->getReturn()}\n";