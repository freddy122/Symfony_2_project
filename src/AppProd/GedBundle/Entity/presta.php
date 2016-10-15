<?php

namespace AppProd\GedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * presta
 */
class presta
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $prestaId;

    /**
     * @var integer
     */
    private $clientId;

    /**
     * @var string
     */
    private $libellePresta;

    /**
     * @var string
     */
    private $nomPresta;


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
     * Set prestaId
     *
     * @param integer $prestaId
     * @return presta
     */
    public function setPrestaId($prestaId)
    {
        $this->prestaId = $prestaId;

        return $this;
    }

    /**
     * Get prestaId
     *
     * @return integer 
     */
    public function getPrestaId()
    {
        return $this->prestaId;
    }

    /**
     * Set clientId
     *
     * @param integer $clientId
     * @return presta
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * Get clientId
     *
     * @return integer 
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * Set libellePresta
     *
     * @param string $libellePresta
     * @return presta
     */
    public function setLibellePresta($libellePresta)
    {
        $this->libellePresta = $libellePresta;

        return $this;
    }

    /**
     * Get libellePresta
     *
     * @return string 
     */
    public function getLibellePresta()
    {
        return $this->libellePresta;
    }

    /**
     * Set nomPresta
     *
     * @param string $nomPresta
     * @return presta
     */
    public function setNomPresta($nomPresta)
    {
        $this->nomPresta = $nomPresta;

        return $this;
    }

    /**
     * Get nomPresta
     *
     * @return string 
     */
    public function getNomPresta()
    {
        return $this->nomPresta;
    }
}
