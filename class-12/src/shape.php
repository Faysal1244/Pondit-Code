<?php

namespace Pondit;

abstract class Shape
{
    public function __construct(protected string $color)
    {
    }

    public function getColor(): string
    {
        return $this->color;
    }

    abstract public function getArea();

    
}
