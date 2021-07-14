<?php
   class Product{
      private $name;

      public function setName($name){
         $this->name = $name;
      }

      public function getName(){
         return  $this->name;
      }
   }
   
   $Product1 = new Product();
   $Product1->setName('IPhone');
   echo $Product1->getName(); 
   
   $Product2 = new Product();
   $Product2->setName('IPhone 12 pro');
   echo $Product2->getName();
