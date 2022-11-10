<?php

declare(strict_types=1);

namespace KHTaskRedo\Factory;

use KHTaskRedo\Interfaces\ProductFilteringStrategyInterface;

class ProductFilterStrategyFactory
{
    public const STRATEGIES = [
        'count_by_price_range' => CountByPriceRangeFilter::class,
        'count_by_vendor_id' => CountByVendorIdFilter::class,
    ];
    public function __construct()
    { 
    }
    public function build(string $strategy): ProductFilteringStrategyInterface
    {
        
    }
}