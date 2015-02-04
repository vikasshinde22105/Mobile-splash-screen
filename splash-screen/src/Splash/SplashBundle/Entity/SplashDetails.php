<?php

namespace Splash\SplashBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SplashDetails
 *
 * @ORM\Table(name="splash_details", indexes={@ORM\Index(name="fk_tbl_splash_details_1_idx", columns={"country_id"}), @ORM\Index(name="fk_tbl_splash_details_2_idx", columns={"brand_id"}), @ORM\Index(name="fk_tbl_splash_details_3_idx", columns={"city_id"}), @ORM\Index(name="fk_tbl_splash_details_4_idx", columns={"vendor_id"})})
 * @ORM\Entity
 */
class SplashDetails
{
    /**
     * @var string
     *
     * @ORM\Column(name="logo_url", type="string", length=45, nullable=true)
     */
    private $logoUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="vendor_domain", type="string", length=45, nullable=true)
     */
    private $vendorDomain;

    /**
     * @var string
     *
     * @ORM\Column(name="headline", type="string", length=45, nullable=true)
     */
    private $headline;

    /**
     * @var string
     *
     * @ORM\Column(name="subline", type="string", length=45, nullable=true)
     */
    private $subline;

    /**
     * @var string
     *
     * @ORM\Column(name="requester_name", type="string", length=45, nullable=true)
     */
    private $requesterName;

    /**
     * @var string
     *
     * @ORM\Column(name="requester_email", type="string", length=45, nullable=true)
     */
    private $requesterEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="customized_background", type="string", length=45, nullable=true)
     */
    private $customizedBackground;

    /**
     * @var string
     *
     * @ORM\Column(name="iso_portrait", type="string", length=45, nullable=true)
     */
    private $isoPortrait;

    /**
     * @var string
     *
     * @ORM\Column(name="iso_landscape", type="string", length=45, nullable=true)
     */
    private $isoLandscape;

    /**
     * @var string
     *
     * @ORM\Column(name="android_portrait", type="string", length=45, nullable=true)
     */
    private $androidPortrait;

    /**
     * @var string
     *
     * @ORM\Column(name="android_landscape", type="string", length=45, nullable=true)
     */
    private $androidLandscape;

    /**
     * @var string
     *
     * @ORM\Column(name="wp8_portrait", type="string", length=45, nullable=true)
     */
    private $wp8Portrait;

    /**
     * @var string
     *
     * @ORM\Column(name="wp8_landscape", type="string", length=45, nullable=true)
     */
    private $wp8Landscape;

    /**
     * @var string
     *
     * @ORM\Column(name="id_link", type="string", length=45, nullable=true)
     */
    private $idLink;

    /**
     * @var string
     *
     * @ORM\Column(name="adjustlink_url", type="string", length=45, nullable=true)
     */
    private $adjustlinkUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="deeplink_url", type="string", length=45, nullable=true)
     */
    private $deeplinkUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="iso_code", type="string", length=45, nullable=true)
     */
    private $isoCode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_on", type="datetime", nullable=true)
     */
    private $createdOn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="closed_on", type="datetime", nullable=true)
     */
    private $closedOn;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Splash\SplashBundle\Entity\Vendors
     *
     * @ORM\ManyToOne(targetEntity="Splash\SplashBundle\Entity\Vendors")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vendor_id", referencedColumnName="id")
     * })
     */
    private $vendor;

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
     * @var \Splash\SplashBundle\Entity\Brands
     *
     * @ORM\ManyToOne(targetEntity="Splash\SplashBundle\Entity\Brands")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="brand_id", referencedColumnName="id")
     * })
     */
    private $brand;

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
     * Set logoUrl
     *
     * @param string $logoUrl
     * @return SplashDetails
     */
    public function setLogoUrl($logoUrl)
    {
        $this->logoUrl = $logoUrl;

        return $this;
    }

    /**
     * Get logoUrl
     *
     * @return string 
     */
    public function getLogoUrl()
    {
        return $this->logoUrl;
    }

    /**
     * Set vendorDomain
     *
     * @param string $vendorDomain
     * @return SplashDetails
     */
    public function setVendorDomain($vendorDomain)
    {
        $this->vendorDomain = $vendorDomain;

        return $this;
    }

    /**
     * Get vendorDomain
     *
     * @return string 
     */
    public function getVendorDomain()
    {
        return $this->vendorDomain;
    }

    /**
     * Set headline
     *
     * @param string $headline
     * @return SplashDetails
     */
    public function setHeadline($headline)
    {
        $this->headline = $headline;

        return $this;
    }

    /**
     * Get headline
     *
     * @return string 
     */
    public function getHeadline()
    {
        return $this->headline;
    }

    /**
     * Set subline
     *
     * @param string $subline
     * @return SplashDetails
     */
    public function setSubline($subline)
    {
        $this->subline = $subline;

        return $this;
    }

    /**
     * Get subline
     *
     * @return string 
     */
    public function getSubline()
    {
        return $this->subline;
    }

    /**
     * Set requesterName
     *
     * @param string $requesterName
     * @return SplashDetails
     */
    public function setRequesterName($requesterName)
    {
        $this->requesterName = $requesterName;

        return $this;
    }

    /**
     * Get requesterName
     *
     * @return string 
     */
    public function getRequesterName()
    {
        return $this->requesterName;
    }

    /**
     * Set requesterEmail
     *
     * @param string $requesterEmail
     * @return SplashDetails
     */
    public function setRequesterEmail($requesterEmail)
    {
        $this->requesterEmail = $requesterEmail;

        return $this;
    }

    /**
     * Get requesterEmail
     *
     * @return string 
     */
    public function getRequesterEmail()
    {
        return $this->requesterEmail;
    }

    /**
     * Set customizedBackground
     *
     * @param string $customizedBackground
     * @return SplashDetails
     */
    public function setCustomizedBackground($customizedBackground)
    {
        $this->customizedBackground = $customizedBackground;

        return $this;
    }

    /**
     * Get customizedBackground
     *
     * @return string 
     */
    public function getCustomizedBackground()
    {
        return $this->customizedBackground;
    }

    /**
     * Set isoPortrait
     *
     * @param string $isoPortrait
     * @return SplashDetails
     */
    public function setIsoPortrait($isoPortrait)
    {
        $this->isoPortrait = $isoPortrait;

        return $this;
    }

    /**
     * Get isoPortrait
     *
     * @return string 
     */
    public function getIsoPortrait()
    {
        return $this->isoPortrait;
    }

    /**
     * Set isoLandscape
     *
     * @param string $isoLandscape
     * @return SplashDetails
     */
    public function setIsoLandscape($isoLandscape)
    {
        $this->isoLandscape = $isoLandscape;

        return $this;
    }

    /**
     * Get isoLandscape
     *
     * @return string 
     */
    public function getIsoLandscape()
    {
        return $this->isoLandscape;
    }

    /**
     * Set androidPortrait
     *
     * @param string $androidPortrait
     * @return SplashDetails
     */
    public function setAndroidPortrait($androidPortrait)
    {
        $this->androidPortrait = $androidPortrait;

        return $this;
    }

    /**
     * Get androidPortrait
     *
     * @return string 
     */
    public function getAndroidPortrait()
    {
        return $this->androidPortrait;
    }

    /**
     * Set androidLandscape
     *
     * @param string $androidLandscape
     * @return SplashDetails
     */
    public function setAndroidLandscape($androidLandscape)
    {
        $this->androidLandscape = $androidLandscape;

        return $this;
    }

    /**
     * Get androidLandscape
     *
     * @return string 
     */
    public function getAndroidLandscape()
    {
        return $this->androidLandscape;
    }

    /**
     * Set wp8Portrait
     *
     * @param string $wp8Portrait
     * @return SplashDetails
     */
    public function setWp8Portrait($wp8Portrait)
    {
        $this->wp8Portrait = $wp8Portrait;

        return $this;
    }

    /**
     * Get wp8Portrait
     *
     * @return string 
     */
    public function getWp8Portrait()
    {
        return $this->wp8Portrait;
    }

    /**
     * Set wp8Landscape
     *
     * @param string $wp8Landscape
     * @return SplashDetails
     */
    public function setWp8Landscape($wp8Landscape)
    {
        $this->wp8Landscape = $wp8Landscape;

        return $this;
    }

    /**
     * Get wp8Landscape
     *
     * @return string 
     */
    public function getWp8Landscape()
    {
        return $this->wp8Landscape;
    }

    /**
     * Set idLink
     *
     * @param string $idLink
     * @return SplashDetails
     */
    public function setIdLink($idLink)
    {
        $this->idLink = $idLink;

        return $this;
    }

    /**
     * Get idLink
     *
     * @return string 
     */
    public function getIdLink()
    {
        return $this->idLink;
    }

    /**
     * Set adjustlinkUrl
     *
     * @param string $adjustlinkUrl
     * @return SplashDetails
     */
    public function setAdjustlinkUrl($adjustlinkUrl)
    {
        $this->adjustlinkUrl = $adjustlinkUrl;

        return $this;
    }

    /**
     * Get adjustlinkUrl
     *
     * @return string 
     */
    public function getAdjustlinkUrl()
    {
        return $this->adjustlinkUrl;
    }

    /**
     * Set deeplinkUrl
     *
     * @param string $deeplinkUrl
     * @return SplashDetails
     */
    public function setDeeplinkUrl($deeplinkUrl)
    {
        $this->deeplinkUrl = $deeplinkUrl;

        return $this;
    }

    /**
     * Get deeplinkUrl
     *
     * @return string 
     */
    public function getDeeplinkUrl()
    {
        return $this->deeplinkUrl;
    }

    /**
     * Set isoCode
     *
     * @param string $isoCode
     * @return SplashDetails
     */
    public function setIsoCode($isoCode)
    {
        $this->isoCode = $isoCode;

        return $this;
    }

    /**
     * Get isoCode
     *
     * @return string 
     */
    public function getIsoCode()
    {
        return $this->isoCode;
    }

    /**
     * Set createdOn
     *
     * @param \DateTime $createdOn
     * @return SplashDetails
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;

        return $this;
    }

    /**
     * Get createdOn
     *
     * @return \DateTime 
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * Set closedOn
     *
     * @param \DateTime $closedOn
     * @return SplashDetails
     */
    public function setClosedOn($closedOn)
    {
        $this->closedOn = $closedOn;

        return $this;
    }

    /**
     * Get closedOn
     *
     * @return \DateTime 
     */
    public function getClosedOn()
    {
        return $this->closedOn;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return SplashDetails
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
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
     * Set vendor
     *
     * @param \Splash\SplashBundle\Entity\Vendors $vendor
     * @return SplashDetails
     */
    public function setVendor(\Splash\SplashBundle\Entity\Vendors $vendor = null)
    {
        $this->vendor = $vendor;

        return $this;
    }

    /**
     * Get vendor
     *
     * @return \Splash\SplashBundle\Entity\Vendors 
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Set city
     *
     * @param \Splash\SplashBundle\Entity\Cities $city
     * @return SplashDetails
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

    /**
     * Set brand
     *
     * @param \Splash\SplashBundle\Entity\Brands $brand
     * @return SplashDetails
     */
    public function setBrand(\Splash\SplashBundle\Entity\Brands $brand = null)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return \Splash\SplashBundle\Entity\Brands 
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set country
     *
     * @param \Splash\SplashBundle\Entity\Countries $country
     * @return SplashDetails
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
