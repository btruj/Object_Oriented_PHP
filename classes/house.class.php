<?php

class House {
    public $streetName;
    public $streetNr;

    public function __construct($streetName, $streetNr) {
        $this->streetName = $streetName;
        $this->streetNr = $streetNr;
    }

    public function getAddress() {
        $address = $this->streetName . ' ' . $this->streetNr;
        return $address;
    }
}