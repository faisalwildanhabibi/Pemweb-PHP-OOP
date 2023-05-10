<?php

require_once 'Product.php';

class CdRack extends Product {
    private $capacity;
    private $model;

    public function getCapacity() {
        return $this->capacity;
    }

    public function setCapacity($capacity) {
        $this->capacity = $capacity;
    }

    public function getModel() {
        return $this->model;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function calculatePrice() {
        $this->setPrice($this->getPrice() * 1.15); // Penambahan 15% dari harga data
    }
}
