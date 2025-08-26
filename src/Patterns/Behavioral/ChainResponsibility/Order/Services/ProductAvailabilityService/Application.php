<?php

namespace App\Patterns\Behavioral\ChainResponsibility\Order\Services\ProductAvailabilityService;

use App\Patterns\Behavioral\ChainResponsibility\Order\Product;

class Application
{
    private array $productsAvailability = [
        'PRO-1' => 10,
        'PRO-2' => 73,
        'PRO-3' => 0,
    ];

    public function isProductAvailable(Product $product): bool
    {
        return $this->productsAvailability[$product->getId()] > 0;
    }
}