<?php

namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory;

abstract class AbstractButton implements Renderable
{
    protected string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    abstract public function onClick(): void;
}