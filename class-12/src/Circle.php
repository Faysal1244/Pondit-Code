<?php

namespace Pondit;

use Pondit\Contracts\HasArea;

class Circle implements HasArea
{
    protected int $radius = 15;
    public function getArea()
    {
        return M_PI * $this->radius ** 2;
    }
}
