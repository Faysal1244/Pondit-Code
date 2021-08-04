<?php
namespace Pondit;
require 'vendor/autoload.php';

$square = new Square('red');
$rectangle = new Rectangle('green');

var_dump($rectangle->getArea());
// var_dump($rectangle->getColor());