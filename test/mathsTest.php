<?php
use PHPUnit\Framework\TestCase;
require __DIR__ ."/../src/maths.php";

// {}
class mathsTest extends TestCase
{
    private $maths;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->maths = new Maths();
    }

    public function testDouble()
    {
        $this->assertEquals(4,$this->maths->double(2));
    }

    public function testTriple()
    {
        $this->assertEquals(9, $this->maths->triple(3));
    }

    public function testArray()
    {
        $array = array(2,4,5,1);
        sort($array);

        $this->assertEquals($array, $this->maths->sortArray($array));
    }

    public function testEqualsNumber()
    {
        $this->assertEquals(true, $this->maths->compareTwoNumber(2,2));
    }

    public function testMultiplicate()
    {
        $a = rand(0,10);
        $b = rand(0,10);

        $this->assertEquals(($a*$b), $this->maths->multiplicateTwoNumber($a,$b));
    }

    public function testSuccess()
    {
        $number = rand(0,1);
        $this->assertEquals($number, $this->maths->number($number));
    }

    public function testFailure()
    {
        $number = rand(0,1);
        $this->assertEquals($number+1, $this->maths->number($number));
    }

    public function testRisky()
    {
        $this->markTestIncomplete("Risky");
    }
}