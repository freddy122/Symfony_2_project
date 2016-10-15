<?php

namespace AppProd\GedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * client
 */
class client
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $clientId;

    /**
     * @var string
     */
    private $libelleClient;


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
     * Set clientId
     *
     * @param integer $clientId
     * @return client
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
     * Set libelleClient
     *
     * @param string $libelleClient
     * @return client
     */
    public function setLibelleClient($libelleClient)
    {
        $this->libelleClient = $libelleClient;

        return $this;
    }

    /**
     * Get libelleClient
     *
     * @return string 
     */
    public function getLibelleClient()
    {
        return $this->libelleClient;
    }
}
