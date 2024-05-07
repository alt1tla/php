<?php

interface CalculateSquare
{
    public function calculateSquare(): float;
}

class Rectangle implements CalculateSquare
{
    public function __construct(public $x, public $y) {}

    public function calculateSquare(): float
    {
        return $this->x * $this->y;
    }
}

class Circle implements CalculateSquare
{
    const PI = 3.14;
    public function __construct(public $r) {}

    public function calculateSquare(): float
    {
        return self::PI * ($this->r ** 2);
    }
}

class Square
{
    public function __construct(public $x) {}

    // public function calculateSquare(): float
    // {
    //     return $this->x * $this->x;
    // }
}

$data = [
    $circle = new Circle(5),
    $square = new Square(2),
    $rectangle = new Rectangle(1, 4)
];

foreach ($data as $elem) {
    if ($elem instanceof CalculateSquare) {
        $className = get_class($elem);
        echo "Площадь объекта класса $className: " . $elem->calculateSquare() . '<br>';
    } else {
        $className = get_class($elem);
        echo "Объект класса $className не реализует интерфейс CalculateSquare." . '<br>';
    }
}

?>