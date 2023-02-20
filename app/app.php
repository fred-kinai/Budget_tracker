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
        $files[] = $file;
    }
    return $files;
}