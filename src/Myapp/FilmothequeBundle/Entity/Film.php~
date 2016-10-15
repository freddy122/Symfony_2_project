<?php
	
namespace Myapp\FilmothequeBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
	/**
	* Myapp\FilmothequeBundle\Entity\Film
	*@ORM\Table()
	*@ORM\Entity(repositoryClass="Myapp\FilmothequeBundle\Entity\FilmRepository")
	*/
	class Film
	{
		/**
		* @var integer $id
		**
		@ORM\Column(name="id", type="integer")
		* @ORM\Id
		* @ORM\GeneratedValue(strategy="AUTO")
		*/
		private $id;
		
		
		/**
		* @var string $titre
		**
		@ORM\Column(name="titre", type="string", length=255)
		*/
		private $titre;
		
		
		/**
		* @var string $description
		**
		@ORM\Column(name="description", type="string", length=500)
		*/
		private $description;
		
		
		/**
		* @ORM\ManyToOne(targetEntity="Myapp\FilmothequeBundle\Entity\Categorie")
		* @ORM\JoinColumn(nullable=false)
		*/
		private $categorie;
		
		/**
		* @ORM\ManyToMany(targetEntity="Myapp\FilmothequeBundle\Entity\Acteur",cascade={"persist"})
		*/
		private $acteurs;
		
		
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->acteurs = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set titre
     *
     * @param string $titre
     * @return Film
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Film
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set categorie
     *
     * @param \Myapp\FilmothequeBundle\Entity\Categorie $categorie
     * @return Film
     */
    public function setCategorie(\Myapp\FilmothequeBundle\Entity\Categorie $categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \Myapp\FilmothequeBundle\Entity\Categorie 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Add acteurs
     *
     * @param \Myapp\FilmothequeBundle\Entity\Acteur $acteurs
     * @return Film
     */
    public function addActeur(\Myapp\FilmothequeBundle\Entity\Acteur $acteurs)
    {
        $this->acteurs[] = $acteurs;

        return $this;
    }

    /**
     * Remove acteurs
     *
     * @param \Myapp\FilmothequeBundle\Entity\Acteur $acteurs
     */
    public function removeActeur(\Myapp\FilmothequeBundle\Entity\Acteur $acteurs)
    {
        $this->acteurs->removeElement($acteurs);
    }

    /**
     * Get acteurs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActeurs()
    {
        return $this->acteurs;
    }
}
