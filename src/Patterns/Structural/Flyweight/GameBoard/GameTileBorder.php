<?php

namespace App\Patterns\Structural\Flyweight\GameBoard;

class GameTileBorder
{
    private GameTile $tile;

    public function __construct(
        private string $style,
        private string $thickness,
        string $color,
        string $size,
        int $level
    )
    {
        $this->tile = GameTileFactory::createTile($color, $size, $level);
    }

    public function getStyle(): string
    {
        return $this->style;
    }

    public function getThickness(): string
    {
        return $this->thickness;
    }

    public function getTile(): GameTile
    {
        return $this->tile;
    }
}