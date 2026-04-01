<?php

$dir = new DirectoryIterator('./');

foreach ($dir as $file) {

    if ($file->isFile()) {

        $name = $file->getFilename();
        $size = $file->getSize();
        $atime = date('Y/m/d H:i:s', $file->getATime());
        $mtime = date('Y/m/d H:i:s', $file->getMTime());

        echo "{$name} | Size={$size}B | ATime={$atime} | MTime={$mtime}\n";
    }

}