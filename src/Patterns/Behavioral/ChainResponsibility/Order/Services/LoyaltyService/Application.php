<?php

namespace App\Patterns\Behavioral\ChainResponsibility\Order\Services\LoyaltyService;

use App\Patterns\Behavioral\ChainResponsibility\Order\User;

class Application
{
    private array $loyaltyDirectory = [
        'USR-100' => 5,
        'USR-101' => 7,
        'USR-102' => 3,
    ];

    public function isUserLoyal(User $user): bool
    {
        return $this->loyaltyDirectory[$user->getId()] >= 5;
    }
}