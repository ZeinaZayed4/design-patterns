<?php

namespace App\Patterns\Structural\Flyweight\GameBoard;

class GameTile
{
    public function __construct(
        private string $color,
        private string $size,
        private int $level
    ) {}

    public function getColor(): string
    {
        return $this->color;
    }

    public function getSize(): string
    {
        return $this->size;
    }

    public function getLevel(): int
    {
        return $this->level;
    }
}