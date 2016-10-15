<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * article
 */
class article
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nomArticle;

    /**
     * @var string
     */
    private $publication;

    /**
     * @var string
     */
    private $commentaire;


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
     * Set nomArticle
     *
     * @param string $nomArticle
     * @return article
     */
    public function setNomArticle($nomArticle)
    {
        $this->nomArticle = $nomArticle;

        return $this;
    }

    /**
     * Get nomArticle
     *
     * @return string 
     */
    public function getNomArticle()
    {
        return $this->nomArticle;
    }

    /**
     * Set publication
     *
     * @param string $publication
     * @return article
     */
    public function setPublication($publication)
    {
        $this->publication = $publication;

        return $this;
    }

    /**
     * Get publication
     *
     * @return string 
     */
    public function getPublication()
    {
        return $this->publication;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return article
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }
}
