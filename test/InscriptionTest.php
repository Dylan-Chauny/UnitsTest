<?php
use PHPUnit\Framework\TestCase;
require __DIR__ ."/../src/Persons.php";
require __DIR__ ."/../src/Inscription.php";
require __DIR__ ."/../src/School.php";

// {}
class inscriptionTest extends TestCase
{
    private $school;
    private $persons;

    public function testBudget()
    {
        $this->school  = new School("3il", "Saint Anne", 5600, "3il@3il.fr", "05.05.05.05.05");
        $this->persons = new Persons("Chauny", "Dylan", "M", 23, "email@gmail.com", "06.06.06.06.06", 8000);

        $this->assertLessThan($this->persons->getBudget(), $this->school->getPrix());
    }

    public function testCreateInscription()
    {
        $personMock = $this->createMock(Persons::class);
        $schoolMock = $this->createMock(School::class);

        $personMock->method("getBudget")->willReturn(8000);
        $this->assertSame(8000, $personMock->getBudget());

        $school  = new School("3il", "Saint Anne", 5600, "3il@3il.fr", "05.05.05.05.05");

        // Personne 1
        $persons1      = new Persons("Chauny", "Dylan", "M", 23, "email@gmail.com", "05.05.05.05.05", 8000);
        $personMock1   = $this->createMock(Inscription::class);
        $personMock1->method("validInsert")->willReturn(false);
        $schoolMock->method("getNom")->willReturn("3il");
        $this->assertEquals(false, $personMock1->method('validInsert'));
        $this->assertEquals("3il", $schoolMock->method('getNom'));
        new Inscription($school, $persons1);

        // Personne 2
        $persons2 = new Persons("Chauny", "Anthony", "M", 23, "email@gmail.com", "04.04.04.04.04", 9000);
        $personMock2   = $this->createMock(Inscription::class);
        $personMock2->method("validInsert")->willReturn(false);
        $schoolMock->method("getNom")->willReturn("3il");
        $this->assertEquals(false, $personMock1->method('validInsert'));
        $this->assertEquals("3il", $schoolMock->method('getNom'));
        new Inscription($school, $persons2);

        // Personne 3
        $persons3 = new Persons("Coppin", "Léa", "F", 23, "email@gmail.com", "01.01.01.01.01", 9000);
        $personMock3   = $this->createMock(Inscription::class);
        $personMock3->method("validInsert")->willReturn(true);
        $schoolMock->method("getNom")->willReturn("3il");
        $this->assertEquals(true, $personMock1->method('validInsert'));
        $this->assertEquals("3il", $schoolMock->method('getNom'));
        new Inscription($school, $persons3);
    }
}