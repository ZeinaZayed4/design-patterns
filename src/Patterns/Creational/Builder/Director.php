<?php

namespace App\Patterns\Creational\Builder;

use App\Patterns\Creational\Builder\Computer\Types\Computer;

class Director
{
    private Builder $builder;

    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function changeBuilder(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function makeComputer(): Computer
    {
        return $this->builder->getComputer();
    }
}