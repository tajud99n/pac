<?php

namespace standard;

class ConfReader
{
    const MODE_FILE = 1;
    const MODE_DB = 2;
    private $confFile;
    private $confValues = [];
     
    public function readConf()
    {
    }
    

    public function __construct(
        int $size,
        string $name,
        bool $wraparound = false,
        bool $aliens = false
    ) {
    }
}
