<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Counter
 *
 * @author marc
 */
class Counter {
    private $curNumber = 0;
    
    public function returnFizzOrBuzzOrFizzBuzz($nrObj) {
        $returnValue = '';
        
        if ($nrObj->isDivisibleByThree() || $nrObj->containsThree()) {
            $returnValue .= 'Fizz';
        }
        
        if ($nrObj->isDivisibleByFive() || $nrObj->containsFive()) {
            $returnValue .= 'Buzz';
        }
        
        if (empty($returnValue)) {
            $returnValue = $nrObj->returnValue();
        }

        return $returnValue;
    }
    
    public function nextNumber() {
        $this->curNumber++;
        return $this->curNumber;
    }  
    
}

?>