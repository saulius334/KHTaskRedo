<?php

declare(strict_types=1);

namespace KHTaskRedo\Interfaces;

interface ReaderInterface
{
    public function read(string $input): OfferCollectionInterface;
}
