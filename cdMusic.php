<?php

require_once 'Product.php';

class CdMusic extends Product {
    private $artist;
    private $genre;

    public function getArtist() {
        return $this->artist;
    }

    public function setArtist($artist) {
        $this->artist = $artist;
    }

    public function getGenre() {
        return $this->genre;
    }

    public function setGenre($genre) {
        $this->genre = $genre;
    }

    public function calculatePrice() {
        $this->setPrice($this->getPrice() * 1.1); // Penambahan 10% dari harga data
        $this->setDiscount($this->getDiscount() * 1.05); // Penambahan 5% dari diskon data
    }
}
