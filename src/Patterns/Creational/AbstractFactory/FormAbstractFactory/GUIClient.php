<?php

namespace App\Patterns\Creational\AbstractFactory\FormAbstractFactory;

class GUIClient
{
    private AbstractFormFactory $factory;

    public function __construct(AbstractFormFactory $factory)
    {
        $this->factory = $factory;
    }

    public function setFactory(AbstractFormFactory $factory): void
    {
        $this->factory = $factory;
    }
    
    public function createForm(): string
    {
        $window = $this->factory->createWindow();
        $window->addComponent($this->factory->createTextInput());
        $window->addComponent($this->factory->createTextArea());
        $window->addComponent($this->factory->createButton());

        return $window->print();
    }
}