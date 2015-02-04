<?php

namespace Splash\SplashBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vendors
 *
 * @ORM\Table(name="vendors", indexes={@ORM\Index(name="fk_tbl_vendor_1_idx", columns={"city_id"})})
 * @ORM\Entity
 */
class Vendors
{
    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=45, nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="area_id", type="integer", nullable=true)
     */
    private $areaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Splash\SplashBundle\Entity\Cities
     *
     * @ORM\ManyToOne(targetEntity="Splash\SplashBundle\Entity\Cities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="city_id", referencedColumnName="id")
     * })
     */
    private $city;



    /**
     * Set code
     *
     * @param string $code
     * @return Vendors
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Vendors
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
     * Set areaId
     *
     * @param integer $areaId
     * @return Vendors
     */
    public function setAreaId($areaId)
    {
        $this->areaId = $areaId;

        return $this;
    }

    /**
     * Get areaId
     *
     * @return integer 
     */
    public function getAreaId()
    {
        return $this->areaId;
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
     * Set city
     *
     * @param \Splash\SplashBundle\Entity\Cities $city
     * @return Vendors
     */
    public function setCity(\Splash\SplashBundle\Entity\Cities $city = null)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return \Splash\SplashBundle\Entity\Cities 
     */
    public function getCity()
    {
        return $this->city;
    }
}
