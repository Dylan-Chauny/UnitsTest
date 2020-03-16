<?php
use PHPUnit\Framework\TestCase;
require __DIR__ ."/../src/School.php";

// {}
class SchoolTest extends TestCase
{
    private $school;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->school  = new School("3il", "Saint Anne", 5600, "3il@3il.fr", "05.05.05.05.05");
    }

    public function testGetSchool()
    {

        //Getters
        $this->assertEquals("3il",$this->school->getNom());
        $this->assertEquals("Saint Anne",$this->school->getAdresse());
        $this->assertEquals(5600,$this->school->getPrix());
        $this->assertEquals("3il@3il.fr",$this->school->getEmail());
        $this->assertEquals("05.05.05.05.05",$this->school->getTelephone());
    }

    public function testSetSchool()
    {
        //Setters
        $oldSchool = clone($this->school);

        $this->school->setNom("InfoSup");
        $this->school->setAdresse("Anne Saint");
        $this->school->setPrix(1000);
        $this->school->setEmail("infoSup@infosub.fr");
        $this->school->setTelephone("04.06.06.06.06");

        $this->assertNotEquals($this->school->getNom(), $oldSchool->getNom());
        $this->assertNotEquals($this->school->getAdresse(), $oldSchool->getAdresse());
        $this->assertNotEquals($this->school->getPrix(), $oldSchool->getPrix());
        $this->assertNotEquals($this->school->getEmail(), $oldSchool->getEmail());
        $this->assertNotEquals($this->school->getTelephone(), $oldSchool->getTelephone());
    }
}