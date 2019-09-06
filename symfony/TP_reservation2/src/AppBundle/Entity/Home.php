<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne as ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn as JoinColumn;

/**
 * Home
 *
 * @ORM\Table(name="home")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\HomeRepository")
 */
class Home
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
     * @ManyToOne(targetEntity="Salle")
     */
    private $salle;

    /**
     * @ManyToOne(targetEntity="Promo")
     * @JoinColumn(name="fk_promo_id", referencedColumnName="id")
     */
    private $promo;

    /**
     * @ManyToOne(targetEntity="Formateur")
     * @JoinColumn(name="fk_formateur_id", referencedColumnName="id")
     */
    private $formateur;

    /**
     * @ManyToOne(targetEntity="Domaine")
     * @JoinColumn(name="fk_domaine_id", referencedColumnName="id")
     */
    private $type;
    /**
     * @var bool
     *
     * @ORM\Column(name="half_day", type="string")
     */
    private $halfDay;

    /**
     * @var string
     *
     * @ORM\Column(name="day", type="string")
     */
    private $day;

    public function __toString()
    {
        $format = "(%s,%s,%s,%s,%s)";
        return sprintf($format, $this->salle, $this->formateur, $this->promo, $this->day,$this->halfDay);
   }

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
     * Set salle
     *
     * @param integer $salle
     *
     * @return Home
     */
    public function setSalle($salle)
    {
        $this->salle = $salle;

        return $this;
    }

    /**
     * Get salle
     *
     * @return int
     */
    public function getSalle()
    {
        return $this->salle;
    }

    /**
     * Set promo
     *
     * @param string $promo
     *
     * @return Home
     */
    public function setPromo($promo)
    {
        $this->promo = $promo;

        return $this;
    }

    /**
     * Get promo
     *
     * @return string
     */
    public function getPromo()
    {
        return $this->promo;
    }

    /**
     * Set formateur
     *
     * @param string $formateur
     *
     * @return Home
     */
    public function setFormateur($formateur)
    {
        $this->formateur = $formateur;

        return $this;
    }

    /**
     * Get formateur
     *
     * @return string
     */
    public function getFormateur()
    {
        return $this->formateur;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Home
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
     * Set halfDay
     *
     * @param boolean $halfDay
     *
     * @return Planning
     */
    public function setHalfDay($halfDay)
    {
        $this->halfDay = $halfDay;

        return $this;
    }

    /**
     * Get halfDay
     *
     * @return bool
     */
    public function getHalfDay()
    {
        return $this->halfDay;
    }

    /**
     * Set day
     *
     * @param string $day
     *
     * @return Home
     */
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get day
     *
     * @return string
     */
    public function getDay()
    {
        return $this->day;
    }

}
