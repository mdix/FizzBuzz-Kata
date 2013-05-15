<?php

class Number {
    private $number;
    
    public function __construct($number) {
        if (!(is_int($number))) {
            throw new ErrorException('no integer given');
        }
        $this->number = $number;
    }
    
    public function returnValue() {
        return $this->number;
    }
    
    public function isDivisibleBy($number) {
        return !($this->numberIsZero()) && !($this->number % $number) ? true : false;
    }
    
    public function contains($number) {
        return is_int(strpos($this->number, (string) $number)) ? true : false;
    }
    
    private function numberIsZero() {
        return 0 === $this->number ? true : false;
    }
}