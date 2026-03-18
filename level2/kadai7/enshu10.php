<?php

$dir = new DirectoryIterator('./');

$fileCount = 0;
$dirCount = 0;

foreach ($dir as $file) {

    
    if ($file->isFile()) {
        $fileCount++;
    }

    if ($file->isDir() && !$file->isDot()) {
        $dirCount++;
    }
}


print "files: " . $fileCount . "\n";
print "dirs: " . $dirCount . "\n";