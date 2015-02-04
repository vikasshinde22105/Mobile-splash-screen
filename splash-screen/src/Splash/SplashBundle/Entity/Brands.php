<?php

namespace Splash\SplashBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Brands
 *
 * @ORM\Table(name="brands", indexes={@ORM\Index(name="fk_tk_brand_1_idx", columns={"country_id"})})
 * @ORM\Entity
 */
class Brands
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Splash\SplashBundle\Entity\Countries
     *
     * @ORM\ManyToOne(targetEntity="Splash\SplashBundle\Entity\Countries")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     * })
     */
    private $country;



    /**
     * Set name
     *
     * @param string $name
     * @return Brands
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
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
     * Set country
     *
     * @param \Splash\SplashBundle\Entity\Countries $country
     * @return Brands
     */
    public function setCountry(\Splash\SplashBundle\Entity\Countries $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \Splash\SplashBundle\Entity\Countries 
     */
    public function getCountry()
    {
        return $this->country;
    }
}
