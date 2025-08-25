<?php

namespace App\Patterns\Structural\Flyweight\GameBoard;

class GameBoard
{
    /** @var GameTileBorder[] */
    private ?array $tiles;

    public function __construct(?array $tiles = [])
    {
        $this->tiles = $tiles;
    }

    public function addTile(GameTileBorder $tile): void
    {
        $this->tiles[] = $tile;
    }

    public function __toString()
    {
        return join('<br />', array_map(fn(GameTileBorder $border) =>
            $border->getStyle() .
            ' | ' .
            $border->getThickness() .
            ' | ' .
            $border->getTile()->getColor() .
            ' | ' .
            $border->getTile()->getSize() .
            ' | ' .
            $border->getTile()->getLevel()
            , $this->tiles
            )
        );
    }
}