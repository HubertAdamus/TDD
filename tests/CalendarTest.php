<?php
require 'vendor/autoload.php';
class CalendarTest extends PHPUnit_Framework_TestCase
{
    protected $year;
    /**
     * @param $testYear
     * @dataProvider additionProvider
     */
    public function testLeapYear($testYear)
    {
        $this->assertTrue($this->year->is_leap_year($testYear), "This year is leap year");
        //$this->assertFalse($this->year->is_leap_year($testYear), "This year is not leap year");
    }
    public function additionProvider()
    {
        return array(
            array(2016),
            array(2015),
            array(null),
            array(true),
            array(false),
            array(PHP_INT_MAX),
            array(0),
        );
    }
    public function setUp()
    {
        $this->year = new CodeLab\Calendar();
    }
    public function tearDown()
    {

    }
}