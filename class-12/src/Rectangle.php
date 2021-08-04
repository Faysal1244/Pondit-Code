<?php

namespace Pondit;

class Rectangle extends Shape
{
    protected int $height = 10;
    protected int $width = 5;

    public function getArea()
    {
        return $this->height * $this->width;
    }
}
