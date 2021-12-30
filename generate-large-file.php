<?php

//generate a large file
file_put_contents(__DIR__ . "/inputfile.txt", "");
$i = 1;
while($i <= 10000000)
{
    file_put_contents(__DIR__ . "/inputfile.txt", "linha {$i}" . "\n", FILE_APPEND);
    $i++;
}
