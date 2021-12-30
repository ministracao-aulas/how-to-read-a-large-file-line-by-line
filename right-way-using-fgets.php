<?php
//------
// Correto com fgets

function readLineByLine(string $file)
{
    if (!file_exists($file))
    {
        return false;
    }

    $handle = fopen($file, "r");
    if (!$handle)
    {
        return false;
    }

    $i = 0;
    while (($line = fgets($handle)) !== false)
    {
        if ((++$i % 1000000) == 0)
        {
            echo "Line: {$i}\n";
        }
    }

    fclose($handle);
}

$file = __DIR__ . "/inputfile.txt";
readLineByLine($file);
