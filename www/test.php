<?php

  class Product{
    public $title = "a dream withing a dream";
    private $price= 200;
    public $type;

    public function setTitle($title){
      $this->title = $title;
    }

    //Dedcorator Design Pattern
    public __construct($title, $price, $type){
      $this->$title = $title;
      $this->$price = $price;
      $this->$type = $type;
    }

    public function gettitle(){
      return $this->title;
    }
  }

  $newProd = "Hello";

  //Reference to an Object is $prod
  $prod = new Product();
  echo $prod->title;

  $newProd = $prod;

  echo $newProd->title;
  $newProd->title = "a bronze head";
  echo "<hr>";
  echo $prod->title;
  echo "<hr>";
  echo $newProd->title;

  $prod = new Product();
  $price->price = 13;

  //Encapsulation/data hiding

 ?>
