<?php
class Product
{


    public function __construct(private $name, private $price, private $description)
    {
        echo $name;
    }
}

$Product1 = new Product("Faysal",12,55);

echo $Product1;

// $Product2 = new Product();
// $Product2->setName('IPhone 12 pro');
// echo $Product2->getName();
