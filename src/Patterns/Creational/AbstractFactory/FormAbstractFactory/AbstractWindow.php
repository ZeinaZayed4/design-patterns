<?php

namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory;

abstract class AbstractWindow
{
    protected array $components;
    protected string $size;

    public function __construct(string $size)
    {
        $this->size = $size;
    }

    public function addComponent(Renderable $component): void
    {
        $this->components[] = $component;
    }

    public function print(): string
    {
        $renderedComponents = implode('', array_map(fn(Renderable $e) => $e->render(), $this->components));

        return "Welcome to our GUI form<br />$renderedComponents";
    }

    public function getSize(): string
    {
        return $this->size;
    }

    public function setSize(string $size): void
    {
        $this->size = $size;
    }

    abstract public function onClose(): void;
    abstract public function onResize(): void;
}