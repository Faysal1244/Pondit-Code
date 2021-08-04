<?php

namespace Pondit;

class Square extends Shape
{
    protected int $length = 4;

    public function getArea()
    {
        return $this->length ** 2;
    }
}
