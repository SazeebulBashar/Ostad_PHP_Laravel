<?php

class Product {
    public int $id;
    public String $name;
    public  float $price;
    
    public function __construct($id, $name, $price) {
        // TODO: Initialize properties
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }


    // TODO: Add getFormattedPrice method
    public function getformattedPrice() {
        return round($this->price, 2);
    }


    // TODO: Add showDetails method
    public function showDetails(){
        echo "Product Details" . PHP_EOL;
        echo "ID: " . $this->id . PHP_EOL;
        echo "Name: " . $this->name . PHP_EOL;
        echo "Price: " . $this->getformattedPrice() . PHP_EOL;
    }
}


// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();



// Expected Output:


// Product Details:
// - ID: 1
// - Name: T-shirt
// - Price: $19.99







?>