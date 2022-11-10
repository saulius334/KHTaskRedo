<?php

declare(strict_types=1);

namespace KHTaskRedo\Services\Readers;

use KHTaskRedo\Interfaces\OfferCollectionInterface;
use KHTaskRedo\Interfaces\ReaderInterface;

class JsonReader implements ReaderInterface
{
    public function read(string $input): OfferCollectionInterface
    {
        return new OfferCollectionInterface;
    }
}