<?php

use App\Patterns\Structural\Flyweight\GameBoard\GameBoard;
use App\Patterns\Structural\Flyweight\GameBoard\GameTileBorder;
use App\Patterns\Structural\Flyweight\GameBoard\GameTileColor;
use App\Patterns\Structural\Flyweight\GameBoard\GameTileFactory;
use App\Patterns\Structural\Flyweight\GameBoard\GameTileLevel;

require_once __DIR__ . '/../vendor/autoload.php';

$board = new GameBoard();
$borderTile1 = new GameTileBorder(
    'dashed',
    'thick',
    GameTileColor::TILE_COLOR_GREEN,
    '100x100',
    GameTileLevel::TILE_LEVEL_BEGINNER
);
$borderTile2 = new GameTileBorder(
    'dashed',
    'thick',
    GameTileColor::TILE_COLOR_GREEN,
    '100x100',
    GameTileLevel::TILE_LEVEL_BEGINNER
);
$borderTile3 = new GameTileBorder(
    'dashed',
    'thick',
    GameTileColor::TILE_COLOR_GRAY,
    '150x150',
    GameTileLevel::TILE_LEVEL_INTERMEDIATE
);
$borderTile4 = new GameTileBorder(
    'dashed',
    'thick',
    GameTileColor::TILE_COLOR_GRAY,
    '150x150',
    GameTileLevel::TILE_LEVEL_INTERMEDIATE
);
$borderTile5 = new GameTileBorder(
    'dashed',
    'thick',
    GameTileColor::TILE_COLOR_BLUE,
    '200x200',
    GameTileLevel::TILE_LEVEL_ADVANCED
);
$borderTile6 = new GameTileBorder(
    'dashed',
    'thick',
    GameTileColor::TILE_COLOR_BROWN,
    '150x150',
    GameTileLevel::TILE_LEVEL_BEGINNER
);
$borderTile7 = new GameTileBorder(
    'dashed',
    'thick',
    GameTileColor::TILE_COLOR_WHITE,
    '300x300',
    GameTileLevel::TILE_LEVEL_INTERMEDIATE
);
$borderTile8 = new GameTileBorder(
    'dashed',
    'thick',
    GameTileColor::TILE_COLOR_WHITE,
    '300x300',
    GameTileLevel::TILE_LEVEL_INTERMEDIATE
);
$borderTile9 = new GameTileBorder(
    'dashed',
    'thick',
    GameTileColor::TILE_COLOR_RED,
    '300x300',
    GameTileLevel::TILE_LEVEL_ADVANCED
);
$borderTile10 = new GameTileBorder(
    'dashed',
    'thick',
    GameTileColor::TILE_COLOR_RED,
    '300x300',
    GameTileLevel::TILE_LEVEL_ADVANCED
);

$board->addTile($borderTile1);
$board->addTile($borderTile2);
$board->addTile($borderTile3);
$board->addTile($borderTile4);
$board->addTile($borderTile5);
$board->addTile($borderTile6);
$board->addTile($borderTile7);
$board->addTile($borderTile8);
$board->addTile($borderTile9);
$board->addTile($borderTile10);

echo $board;

echo '<pre>';
GameTileFactory::getTiles();
echo '</pre>';
