<?php
use PHPUnit\Framework\TestCase;
require __DIR__ ."/../src/Persons.php";

// {}
class PersonsTest extends TestCase
{
    private $persons;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->persons = new Persons("Chauny", "Dylan", "M", 23, "email@gmail.com", "06.06.06.06.06", 1000);
    }

    public function testGetterPerson()
    {
        //Getters
        $this->assertEquals("Chauny", $this->persons->getNom());
        $this->assertEquals("Dylan", $this->persons->getPrenom());
        $this->assertEquals("M", $this->persons->getSexe());
        $this->assertEquals(23, $this->persons->getAge());
        $this->assertEquals("email@gmail.com", $this->persons->getEmail());
        $this->assertEquals("06.06.06.06.06", $this->persons->getTelephone());
        $this->assertEquals(1000, $this->persons->getBudget());
    }

    public function testSetterPerson()
    {
        //Setters
        $oldPerson = clone ($this->persons);

        $this->persons->setNom("Braud");
        $this->persons->setPrenom("Nicolas");
        $this->persons->setSexe("F");
        $this->persons->setAge(22);
        $this->persons->setEmail("Braud@3il.fr");
        $this->persons->setTelephone("02.02.02.02.02");
        $this->persons->setBudget(5600);


        $this->assertNotEquals($this->persons->getNom(), $oldPerson->getNom());
        $this->assertNotEquals($this->persons->getPrenom(), $oldPerson->getPrenom());
        $this->assertNotEquals($this->persons->getSexe(), $oldPerson->getSexe());
        $this->assertNotEquals($this->persons->getAge(), $oldPerson->getAge());
        $this->assertNotEquals($this->persons->getEmail(), $oldPerson->getEmail());
        $this->assertNotEquals($this->persons->getTelephone(), $oldPerson->getTelephone());
        $this->assertNotEquals($this->persons->getBudget(), $oldPerson->getBudget());
    }
}