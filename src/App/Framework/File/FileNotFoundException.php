<?php

namespace App\Framework\File;

use RuntimeException;

class FileNotFoundException extends RuntimeException
{
    public function __construct(string $filename)
    {
        parent::__construct("File not found: $filename");
    }
}