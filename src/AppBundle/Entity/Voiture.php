<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Voiture
 *
 * @ORM\Table(name="voiture")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VoitureRepository")
 */
class Voiture extends Vehicule 
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
     * @var bool
     *
     * @ORM\Column(name="Decapotable", type="boolean")
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
     * Set decapotable
     *
     * @param boolean $decapotable
     *
     * @return Voiture
     */
    public function setDecapotable($decapotable)
    {
        $this->decapotable = $decapotable;

        return $this;
    }

    /**
     * Get decapotable
     *
     * @return bool
     */
    public function getDecapotable()
    {
        return $this->decapotable;
    }







    
}