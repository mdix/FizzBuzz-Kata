<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Number
 *
 * @author marc
 */
class Number {
    private $nr;
    private $isDivisibleByThree = false;
    private $isDivisibleByFive = false;
    private $containsFive = false;
    private $containsThree = false;
    
    public function __construct($nr) {        
        if (!(is_int($nr))) {
            throw new ErrorException('no integer given');
        }
        $this->nr = $nr;
        $this->setFlagIfDivisibleByThree();
        $this->setFlagIfDivisibleByFive();
        $this->setFlagIfContainsFive();
        $this->setFlagIfContainsThree();
    }
    
    public function returnValue() {
        return $this->nr;
    }
    
    public function isDivisibleByThree() {
        return $this->isDivisibleByThree;
    }
    
    public function isDivisibleByFive() {
        return $this->isDivisibleByFive;
    }
    
    public function containsFive() {
        return $this->containsFive;
    }
    
    public function containsThree() {
        return $this->containsThree;
    }
    
    private function setFlagIfDivisibleByThree() {
        if ( !($this->nrIsZero()) && !($this->nr % 3) ) {
            $this->isDivisibleByThree = true;
        }
    }
    
    private function setFlagIfDivisibleByFive() {
        if ( !($this->nrIsZero()) && !($this->nr % 5) ) {
            $this->isDivisibleByFive = true;
        }
    }

    private function setFlagIfContainsFive() {
        if ( is_int(strpos($this->nr, '5')) ) {
            $this->containsFive = true;
        }
    }

    private function setFlagIfContainsThree() {
        if ( is_int(strpos($this->nr, '3')) ) {
            $this->containsThree = true;
        }
    }    
    
    private function nrIsZero() {
        if (0 === $this->nr) {
            return true;
        } else {
            return false;
        }
    }
    
}

?>
