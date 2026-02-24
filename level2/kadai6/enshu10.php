<?php


function myGenWords(): Generator {
    yield 'なまむぎ';
    yield 'なまごめ';
    yield 'なまたまご';
}



function getEvenNumbers(): Generator {
    $num = 2;

    while (true) {
        yield $num;
        $num += 2;
    }
}


foreach (myGenWords() as $value) {
    print "word={$value}\n";
}



print "evens=";

foreach (getEvenNumbers() as $even) {
    if ($even > 10) {
        break;
    }
    print "{$even},";
}

print "\n";