<?php

class Bankaccount
{
    private $accountNumber;
    private $name;
    private $balance = 0;

    function __construct($name, $balance, $accountNumber)
    {
        $this->accountNumber = $accountNumber;
        $this->name = $name;
        $this->balance = $balance;
    }

    public function deposit($d)
    {
        $this->balance = $this->balance + $d;
    }

    public function withdrawal($w)
    {
        $this->balance = $this->balance - $w;
    }

    public function bankFees()
    {
        $d = date('m');
        if ($d == 7) {
            $this->balance = $this->balance * 0.05;
        }
    }
    public function display()
    {
        echo "Name : " . $this->name . PHP_EOL .
            "Account Number :" . $this->accountNumber . PHP_EOL . "Balance :" . $this->balance . PHP_EOL;
    }
}



$b = new Bankaccount("Faysal", 200, "500");


$b->deposit(500);
$b->display();


$b->withdrawal(5);
$b->display();

$b->bankFees();
$b->display();
