<?php

require_once dirname(__FILE__) . '/../Number.php';

/**
 * Test class for Number.
 * Generated by PHPUnit on 2011-10-05 at 22:35:45.
 */
class NumberTest extends PHPUnit_Framework_TestCase {
    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {

    }

    public function test__construct() {
        $object = new Number(3);
        $this->assertEquals($object->returnValue(), 3);
    }

    public function testIsDivisibleByThree() {
        $object = new Number(3);        
        $this->assertEquals($object->isDivisibleByThree(), true);
        
        $object = new Number(4);        
        $this->assertEquals($object->isDivisibleByThree(), false);
        
        $object = new Number(6);        
        $this->assertEquals($object->isDivisibleByThree(), true);
        
        $object = new Number(0);        
        $this->assertEquals($object->isDivisibleByThree(), false);
        
        $object = new Number(36);        
        $this->assertEquals($object->isDivisibleByThree(), true); 
        
        $object = new Number(37);        
        $this->assertEquals($object->isDivisibleByThree(), false);  
    }
    
    public function testIsDivisibleByFive() {
        $object = new Number(5);
        $this->assertEquals($object->isDivisibleByFive(), true);
        
        $object = new Number(7);
        $this->assertEquals($object->isDivisibleByFive(), false);
        
        $object = new Number(19);
        $this->assertEquals($object->isDivisibleByFive(), false);
        
        $object = new Number(0);
        $this->assertEquals($object->isDivisibleByFive(), false);
        
        $object = new Number(95);
        $this->assertEquals($object->isDivisibleByFive(), true);
    }
    
    public function testContainsFive() {
        $object = new Number(5);
        $this->assertEquals($object->containsFive(), true);
        
        $object = new Number(0);
        $this->assertEquals($object->containsFive(), false);
        
        $object = new Number(86);
        $this->assertEquals($object->containsFive(), false);
        
        $object = new Number(55);
        $this->assertEquals($object->containsFive(), true);
        
        $object = new Number(95);
        $this->assertEquals($object->containsFive(), true);
        
        $object = new Number(67);
        $this->assertEquals($object->containsFive(), false);        
        
    }
    
    public function testContainsThree() {
        $object = new Number(3);
        $this->assertEquals($object->containsThree(), true);
        
        $object = new Number(13);
        $this->assertEquals($object->containsThree(), true);
        
        $object = new Number(83);
        $this->assertEquals($object->containsThree(), true);
        
        $object = new Number(84);
        $this->assertEquals($object->containsThree(), false);
        
        $object = new Number(4);
        $this->assertEquals($object->containsThree(), false);
        
        $object = new Number(33);
        $this->assertEquals($object->containsThree(), true);
        
        $object = new Number(0);
        $this->assertEquals($object->containsThree(), false);
        
    }
    
    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

}

?>