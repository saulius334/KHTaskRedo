<?php

declare(strict_types=1);

namespace KHTaskRedo;

use KHTaskRedo\Interfaces\ReaderInterface;

class ClientProductCount
{
    public function __construct(private ReaderInterface $reader)
    {
        
    }
}