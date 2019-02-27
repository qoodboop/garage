<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Camion
 *
 * @ORM\Table(name="camion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CamionRepository")
 */
class Camion extends Vehicule
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
     * Set nbRoues
     *
     * @param integer $nbRoues
     *
     * @return Camion
     */
    public function setNbRoues($nbRoues)
    {
        $this->nbRoues = $nbRoues;

        return $this;
    }

    /**
     * Get nbRoues
     *
     * @return int
     */
    public function getNbRoues()
    {
        return $this->nbRoues;
    }

    /**
     * Set poid
     *
     * @param float $poid
     *
     * @return Camion
     */
    public function setPoid($poid)
    {
        $this->poid = $poid;

        return $this;
    }

    /**
     * Get poid
     *
     * @return float
     */
    public function getPoid()
    {
        return $this->poid;
    }
}

