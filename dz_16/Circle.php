<?php

require_once 'Figure.php';
class Circle extends Figure {
    private $radius;

    public function __construct($radius) {
        if ($radius <= 0) {
            throw new InvalidArgumentException("Radius must be a positive number.");
        }
        $this->radius = $radius;
    }

    public function area() {
        return pi() * $this->radius * $this->radius;
    }

    public function perimeter() {
        return 2 * pi() * $this->radius;
    }

    public function getArea() {
        return $this->area();
    }

    public function getPerimeter() {
        return $this->perimeter();
    }
}