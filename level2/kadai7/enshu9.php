<?php

$dir = new DirectoryIterator('./');


foreach ($dir as $file) {

   
    if ($file->isFile()) {

        
        $name = $file->getFilename();
        $size = $file->getSize(); 
        $atime = date('Y/m/d H:i:s', $file->getATime());
        $mtime = date('Y/m/d H:i:s', $file->getMTime());

        print $name . ' | ATime=' . $atime . ' | MTime=' . $mtime . "\n";
    }
}