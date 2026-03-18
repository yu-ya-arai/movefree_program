<?php


$dir = new DirectoryIterator('./');


foreach ($dir as $file) {

    
    if ($file->isFile()) {

        
        print $file->getFilename() . '：' . $file->getSize() . "B\n";
    }
}