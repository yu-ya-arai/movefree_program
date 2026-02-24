<?php


$x = 10;


function incrementLocalX(): int {
    $x = 0;         
    return ++$x;     
}


function incrementGlobalX(): int {
    global $x;       
    return ++$x;     
}



$local = incrementLocalX();
print "local={$local}\n";

print "global={$x}\n";

$global = incrementGlobalX();
print "globalFunc={$global}\n";

print "global={$x}\n";