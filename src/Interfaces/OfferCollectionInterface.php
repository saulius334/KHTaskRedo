<?php

declare(strict_types=1);

namespace KHTaskRedo\Interfaces;

use Iterator;

interface OfferCollectionInterface
{
    public function get(int $index): OfferInterface;
    public function getIterator(): Iterator;
}
