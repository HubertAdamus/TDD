<?php
require 'vendor/autoload.php';

class CalculatorTest extends PHPUnit_Framework_TestCase{
    protected $calculator;

    /**
     * @param $a
     * @param $b
     * @param $expected
     * @dataProvider additionProvider1
     */
    public  function testAdd($a, $b, $expected)
    {
        $this->assertEquals($this->calculator->add($a, $b), $expected, "Assertion add works");

    }

    /*
    public  function testSubstract($a, $b, $expected)
    {
        $this->assertEquals($this->calculator->substract($a, $b), $expected, "Assertion substract works");
    }

    public  function testMultiply($a, $b, $expected)
    {
        $this->assertEquals($this->calculator->multiply($a, $b), $expected, "Assertion multiply works");

    }
    */
    /**
     * @param $a1
     * @param $b
     * @param $expected
     * @dataProvider additionProvider3
     * @expectedException Exception
     */
    public  function testDivide($a, $b, $expected)
    {
        if ($b == 0){
            throw new \Exception("Nie dziel przez 0");
        }else{
            $this->assertEquals($this->calculator->divide($a, $b), $expected, "Assertion divide works");
        }
    }


    public function additionProvider1()
    {
        return array(
            array(0, 0, 0),
            array(0, 1, 1),
            array(1, 0, 1),
            array(1, 1, 3)
        );
    }

    public function additionProvider3()
    {
        return array(
            array(5, 0, 0),
        );
    }

    public function setUp()
    {
        $this->calculator = new CodeLab\Calculator();
    }
    public function tearDown()
    {

    }
}

