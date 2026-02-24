<?php


require_once __DIR__ . '/enshu5_global.php';


print "global1={$scope}\n";


function getLocalScope(): string {
    require_once __DIR__ . '/enshu5_local.php';
    return $scope;
}

$local = getLocalScope();
print "local={$local}\n";

print "global2={$scope}\n";