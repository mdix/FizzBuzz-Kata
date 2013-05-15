<?php

class Counter {
    private $curNumber = 0;
    
    public function returnFizzOrBuzzOrFizzBuzz($nrObj) {
        $returnValue = '';
        
        if ($nrObj->isDivisibleBy(3) || $nrObj->contains(3)) {
            $returnValue .= 'Fizz';
        }
        
        if ($nrObj->isDivisibleBy(5) || $nrObj->contains(5)) {
            $returnValue .= 'Buzz';
        }
        
        if (empty($returnValue)) {
            $returnValue = $nrObj->returnValue();
        }

        return $returnValue;
    }
    
    public function nextNumber() {
        return ++$this->curNumber;
    }  
    
}