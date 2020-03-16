<?php


class School
{
    private $nom;
    private $adresse;
    private $prix;
    private $email;
    private $telephone;

    /**
     * School constructor.
     * @param $nom
     * @param $adresse
     * @param $prix
     * @param $email
     * @param $telephone
     */
    public function __construct($nom, $adresse, $prix, $email, $telephone)
    {
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->prix = $prix;
        $this->email = $email;
        $this->telephone = $telephone;
    }


    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }
}