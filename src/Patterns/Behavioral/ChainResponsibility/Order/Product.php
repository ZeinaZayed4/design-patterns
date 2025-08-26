<?php

namespace App\Patterns\Behavioral\ChainResponsibility\Order;

class Product
{
    public function __construct(private string $id, private string $name) {}

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
}