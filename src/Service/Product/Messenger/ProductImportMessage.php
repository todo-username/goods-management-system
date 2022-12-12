<?php

declare(strict_types=1);

namespace App\Service\Product\Messenger;

class ProductImportMessage
{
    protected string $fileName;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }

    public function getFileName(): string
    {
        return $this->fileName;
    }
}
