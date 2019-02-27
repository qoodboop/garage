<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Vehicule
 *
 * @ORM\Table(name="vehicule")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VehiculeRepository")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="Type", type="string")
 * @ORM\DiscriminatorMap({"vehicule"="Vehicule", "camion"="Camion", "voiture"="Voiture"})
 */
class Vehicule
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="couleur", type="string", length=30)
     */
    private $couleur;

    /**
     * @var int
     *
     * @ORM\Column(name="marque", type="string", length=255)
     */
       /**
     * @ORM\ManyToOne(targetEntity="Marques")
     * @ORM\JoinColumn(name="Marques", referencedColumnName="id")
     */
    private $marque;



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set couleur
     *
     * @param string $couleur
     *
     * @return Vehicule
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get couleur
     *
     * @return string
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set marque
     *
     * @param string $marque
     *
     * @return Vehicule
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
    }

    public function getType() {
    return (new \ReflectionClass($this))->getShortName();
    }

     /**
     * @var bool
     *
     * @ORM\Column(name="Decapotable", type="boolean")
     */
    private $decapotable;
     /**
     * @var int
     *
     * @ORM\Column(name="NbRoues", type="integer")
     */
    private $nbRoues;
      /**
     * @var float
     *
     * @ORM\Column(name="Poid", type="float")
     */
    private $poid;

    public function getDecapotable()
    {
        return $this->decapotable;
    }
     public function getNbRoues()
    {
        return $this->nbRoues;
    }
    public function getPoid()
    {
        return $this->poid;
    }

}




