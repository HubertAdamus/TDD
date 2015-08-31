<?php
require 'vendor/autoload.php';

class PolishTest extends PHPUnit_Framework_TestCase
{
    protected $number;

    /**
     * @param $number
     * @param $expected
     * @dataProvider additionProvider
     */
    public function testRoman($number, $expected)
    {
        $stringTrim = trim($this->number->polish($number));
        $this->assertEquals($stringTrim, $expected, "Polish numbers works");

    }

    public function additionProvider()
    {
        return array(
            array(1, 'jeden'),
            array(5, 'pięć'),
            array(10, 'dziesięć'),
            array(13, 'trzynaście'),
            array(8, 'osiem'),
            array(50, 'pięćdziesiąt'),
            array(100, 'sto'),
            array(500, 'pięćset'),
            array(1000, 'tysiąc'),
            array(49, 'czterdzieści dziewięć'),
            array(49, 'czterdzieści dziewięć'),
            array(1969, 'tysiąc dziewięćset sześdziesiąt dziewięć'),
            array(598, 'pięćset dziewięćdziesiąt osiem'),
            array(49, 'czterdzieści dziewięć'),
        );
    }

    public function setUp()
    {
        $this->number = new CodeLab\Polish();
    }

    public function tearDown()
    {

    }
}