<?php

class Inscription
{
    private $persons;
    private $school;
    private $inscriptions = array();
    private $nbHomme = 0;
    private $nbFemme = 0;


    /**
     * @param School $school
     * @param Persons $persons
     */
    public function __construct($school, $persons)
    {
        $result = $this->validInsert($school, $persons);

        if($result)
        {
            $this->persons = $persons;
            $this->school  = $school;
        }
    }

    /**
     * @param School $school
     * @param Persons $persons
     * @return bool
     */
    public function validInsert($school, $persons)
    {
        if($persons->getBudget() > $school->getPrix()) {
            if($persons->getSexe() == 'F') return true;

            $this->inscriptions[$school->getNom()][] =  $persons->getSexe();

            foreach ($this->inscriptions[$this->school->getNom()] AS $gender)
            {
                switch ($gender)
                    {
                        case 'M':
                            $this->nbHomme += 1;
                            break;

                        case 'F':
                            $this->nbFemme += 1;
                            break;
                    }
            }

            if($this->nbHomme <= $this->nbFemme)
            {
                return true;
            }
        }
        return false;
    }

    /**
     * @return Persons
     */
    public function getPersons()
    {
        return $this->persons;
    }

    /**
     * @param Persons $persons
     */
    public function setPersons($persons)
    {
        $this->persons = $persons;
    }

    /**
     * @return School
     */
    public function getSchool()
    {
        return $this->school;
    }

    /**
     * @param School $school
     */
    public function setSchool($school)
    {
        $this->school = $school;
    }
}