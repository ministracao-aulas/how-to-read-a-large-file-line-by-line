<?php
$content = explode("\n", file_get_contents(__DIR__ . "/inputfile.txt"));

$i = 0;
foreach ($content as $line)
{
    if ((++$i % 1000000) == 0)
    {
        echo "Line: {$i}\n";
    }
}
