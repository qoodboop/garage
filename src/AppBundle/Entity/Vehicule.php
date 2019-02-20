<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Vehicule
 *
 * @ORM\Table(name="vehicule")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VehiculeRepository")
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
    private $id;

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
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=30)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="NBroues", type="integer", nullable=true)
     */
    private $nBroues;

    /**
     * @var int
     *
     * @ORM\Column(name="Poid", type="integer", nullable=true)
     */
    private $poid;

    /**
     * @var int
     *
     * @ORM\Column(name="Decapotable", type="integer", nullable=true)
     */
    private $decapotable;


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

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Vehicule
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set nBroues
     *
     * @param integer $nBroues
     *
     * @return Vehicule
     */
    public function setNBroues($nBroues)
    {
        $this->nBroues = $nBroues;

        return $this;
    }

    /**
     * Get nBroues
     *
     * @return int
     */
    public function getNBroues()
    {
        return $this->nBroues;
    }

    /**
     * Set poid
     *
     * @param integer $poid
     *
     * @return Vehicule
     */
    public function setPoid($poid)
    {
        $this->poid = $poid;

        return $this;
    }

    /**
     * Get poid
     *
     * @return int
     */
    public function getPoid()
    {
        return $this->poid;
    }

    /**
     * Set decapotable
     *
     * @param integer $decapotable
     *
     * @return Vehicule
     */
    public function setDecapotable($decapotable)
    {
        $this->decapotable = $decapotable;

        return $this;
    }

    /**
     * Get decapotable
     *
     * @return int
     */
    public function getDecapotable()
    {
        return $this->decapotable;
    }
}

