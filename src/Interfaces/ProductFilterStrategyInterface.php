<?php

declare(strict_types=1);

namespace KHTaskRedo\Interfaces;

use KHTaskRedo\DTO\ConsoleInputDTO;

interface ProductFilterStrategyInterface
{
    public function filter(OfferCollectionInterface $offerCollection, ConsoleInputDTO $consoleInputDTO): OfferCollectionInterface;
}