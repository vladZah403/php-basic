<?php

require ("Rectangle.php");
require ("Circle.php");
require_once 'Figure.php';

try {
    // Створення екземпляру Rectangle з заданими значеннями довжини і ширини
    $rectangle = new Rectangle(5, 4);
    echo "Rectangle:".PHP_EOL;
    echo "Length: {$rectangle->getArea()} ".PHP_EOL;
    echo "Width: {$rectangle->getPerimeter()} ".PHP_EOL;
    echo "Area: {$rectangle->area()} ".PHP_EOL;
    echo "Perimeter: {$rectangle->perimeter()}".PHP_EOL;


    // Створення екземпляру Circle з заданим значенням радіуса
    $circle = new Circle(3);
    echo "Circle:".PHP_EOL;
    echo "Radius: {$circle->getArea()} ".PHP_EOL;
    echo "Area: {$circle->getPerimeter()} ".PHP_EOL;
    echo "Area: {$circle->area()} ".PHP_EOL;
    echo "Perimeter: {$circle->perimeter()} ".PHP_EOL;
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage();
}