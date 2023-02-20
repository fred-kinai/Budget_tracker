<?php
declare(strict_types = 1);
//you code

function getTransactionFiles(string $dirPath ): array
{
    $files = [];
    foreach(scandir($dirPath) as $file){
        if (is_dir($file)){
            continue;
        }
        $files[] = $dirPath .  $file;
    }
    return $files;
}

function getTransactionFiles(string $fileName) : array{
    if(! file_exists($fileName)){
        trigger_error('File"'. $fileName . '" does not exist. ', E_USER_ERROR);
    }
}