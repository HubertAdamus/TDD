<?php
require 'vendor/autoload.php';

class RomanTest extends PHPUnit_Framework_TestCase
{
    protected $number;

    /**
     * @param $number
     * @param $expected
     * @dataProvider additionProvider
     */
    public  function testRoman($number, $expected)
    {
        $this->assertEquals($this->number->roman($number), $expected, "Roman numbers works");

    }

    public function additionProvider()
    {
        return array(
            array(1, 'I'),
            array(5, 'V'),
            array(10, 'X'),
            array(13, 'XIII'),
            array(8, 'VIII'),
            array(50, 'L'),
            array(100, 'C'),
            array(500, 'D'),
            array(1000, 'M'),
            array(49, 'XLIX'),
        );
    }

    public function setUp()
    {
        $this->number = new CodeLab\Roman();
    }
    public function tearDown()
    {

    }
}