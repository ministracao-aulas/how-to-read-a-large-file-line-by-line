<?php

// -------
// Correto com yield (generator)

class ReadFile
{
    public function __construct($file)
    {
        $this->file = $file;
    }

    public function read()
    {
        if (!file_exists($this->file))
        {
            return false;
        }

        $file = fopen($this->file, 'r');

        while (($line = fgets($file)) !== false)
        {
            yield $line;
        }
        fclose($file);

        return true;
    }
}

$read = new ReadFile(__DIR__ . "/inputfile.txt");

$i = 0;

foreach ($read->read() as $line)
{
    if((++$i % 1000000) == 0)
    {
        echo "Line: {$i}\n";
    }
}
