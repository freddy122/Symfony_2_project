<?php

namespace AppProd\GedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * commande
 */
class commande
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $commandeId;

    /**
     * @var integer
     */
    private $prestaId;

    /**
     * @var \DateTime
     */
    private $dateReception;

    /**
     * @var \DateTime
     */
    private $heureReception;


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
     * Set commandeId
     *
     * @param string $commandeId
     * @return commande
     */
    public function setCommandeId($commandeId)
    {
        $this->commandeId = $commandeId;

        return $this;
    }

    /**
     * Get commandeId
     *
     * @return string 
     */
    public function getCommandeId()
    {
        return $this->commandeId;
    }

    /**
     * Set prestaId
     *
     * @param integer $prestaId
     * @return commande
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
     * Set dateReception
     *
     * @param \DateTime $dateReception
     * @return commande
     */
    public function setDateReception($dateReception)
    {
        $this->dateReception = $dateReception;

        return $this;
    }

    /**
     * Get dateReception
     *
     * @return \DateTime 
     */
    public function getDateReception()
    {
        return $this->dateReception;
    }

    /**
     * Set heureReception
     *
     * @param \DateTime $heureReception
     * @return commande
     */
    public function setHeureReception($heureReception)
    {
        $this->heureReception = $heureReception;

        return $this;
    }

    /**
     * Get heureReception
     *
     * @return \DateTime 
     */
    public function getHeureReception()
    {
        return $this->heureReception;
    }
}
