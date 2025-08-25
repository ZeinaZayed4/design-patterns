<?php

namespace App\Patterns\Structural\Flyweight\GameBoard;

class GameTileFactory
{
    /** @var GameTile[] */
    private static array $tiles = [];

    public static function getTiles(): void
    {
        var_dump(self::$tiles);
    }

    public static function createTile(
        string $color,
        string $size,
        int $level
    ): GameTile
    {
        $hash = md5($color . $size . $level);

        if (! array_key_exists($hash, self::$tiles)) {
            self::$tiles[$hash] = new GameTile($color, $size, $level);
        }
        return self::$tiles[$hash];
    }
}