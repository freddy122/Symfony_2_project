<?php

namespace Myapp\FilmothequeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * infopers
 */
class infopers
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nompers;

    /**
     * @var string
     */
    private $prenompers;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var string
     */
    private $numerostelephone;

    /**
     * @var string
     */
    private $adresseMail;

    /**
     * @var string
     */
    private $numerosCin;

    /**
     * @var \DateTime
     */
    private $dateDelivranceCin;

    /**
     * @var string
     */
    private $lieuDelivranceCin;

    /**
     * @var string
     */
    private $nombreEnfant;

    /**
     * @var string
     */
    private $situationMatrimoniale;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nompers
     *
     * @param string $nompers
     * @return infopers
     */
    public function setNompers($nompers)
    {
        $this->nompers = $nompers;

        return $this;
    }

    /**
     * Get nompers
     *
     * @return string 
     */
    public function getNompers()
    {
        return $this->nompers;
    }

    /**
     * Set prenompers
     *
     * @param string $prenompers
     * @return infopers
     */
    public function setPrenompers($prenompers)
    {
        $this->prenompers = $prenompers;

        return $this;
    }

    /**
     * Get prenompers
     *
     * @return string 
     */
    public function getPrenompers()
    {
        return $this->prenompers;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return infopers
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set numerostelephone
     *
     * @param string $numerostelephone
     * @return infopers
     */
    public function setNumerostelephone($numerostelephone)
    {
        $this->numerostelephone = $numerostelephone;

        return $this;
    }

    /**
     * Get numerostelephone
     *
     * @return string 
     */
    public function getNumerostelephone()
    {
        return $this->numerostelephone;
    }

    /**
     * Set adresseMail
     *
     * @param string $adresseMail
     * @return infopers
     */
    public function setAdresseMail($adresseMail)
    {
        $this->adresseMail = $adresseMail;

        return $this;
    }

    /**
     * Get adresseMail
     *
     * @return string 
     */
    public function getAdresseMail()
    {
        return $this->adresseMail;
    }

    /**
     * Set numerosCin
     *
     * @param string $numerosCin
     * @return infopers
     */
    public function setNumerosCin($numerosCin)
    {
        $this->numerosCin = $numerosCin;

        return $this;
    }

    /**
     * Get numerosCin
     *
     * @return string 
     */
    public function getNumerosCin()
    {
        return $this->numerosCin;
    }

    /**
     * Set dateDelivranceCin
     *
     * @param \DateTime $dateDelivranceCin
     * @return infopers
     */
    public function setDateDelivranceCin($dateDelivranceCin)
    {
        $this->dateDelivranceCin = $dateDelivranceCin;

        return $this;
    }

    /**
     * Get dateDelivranceCin
     *
     * @return \DateTime 
     */
    public function getDateDelivranceCin()
    {
        return $this->dateDelivranceCin;
    }

    /**
     * Set lieuDelivranceCin
     *
     * @param string $lieuDelivranceCin
     * @return infopers
     */
    public function setLieuDelivranceCin($lieuDelivranceCin)
    {
        $this->lieuDelivranceCin = $lieuDelivranceCin;

        return $this;
    }

    /**
     * Get lieuDelivranceCin
     *
     * @return string 
     */
    public function getLieuDelivranceCin()
    {
        return $this->lieuDelivranceCin;
    }

    /**
     * Set nombreEnfant
     *
     * @param string $nombreEnfant
     * @return infopers
     */
    public function setNombreEnfant($nombreEnfant)
    {
        $this->nombreEnfant = $nombreEnfant;

        return $this;
    }

    /**
     * Get nombreEnfant
     *
     * @return string 
     */
    public function getNombreEnfant()
    {
        return $this->nombreEnfant;
    }

    /**
     * Set situationMatrimoniale
     *
     * @param string $situationMatrimoniale
     * @return infopers
     */
    public function setSituationMatrimoniale($situationMatrimoniale)
    {
        $this->situationMatrimoniale = $situationMatrimoniale;

        return $this;
    }

    /**
     * Get situationMatrimoniale
     *
     * @return string 
     */
    public function getSituationMatrimoniale()
    {
        return $this->situationMatrimoniale;
    }
}
