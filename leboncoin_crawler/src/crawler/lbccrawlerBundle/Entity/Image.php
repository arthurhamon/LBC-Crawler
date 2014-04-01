<?php

namespace crawler\lbccrawlerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="crawler\lbccrawlerBundle\Entity\ImageRepository")
 */
class Image
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="text")
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="size", type="string", length=2)
     */
    private $size;

    /**
     * @var object
     *
     * @ORM\ManyToOne(targetEntity="Ad", inversedBy="images")
     */
    private $ad;


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
     * Set url
     *
     * @param string $url
     * @return Image
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set size
     *
     * @param string $size
     * @return Image
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ads = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ads
     *
     * @param \crawler\lbccrawlerBundle\Entity\Ad $ads
     * @return Image
     */
    public function addAd(\crawler\lbccrawlerBundle\Entity\Ad $ads)
    {
        $this->ads[] = $ads;

        return $this;
    }

    /**
     * Remove ads
     *
     * @param \crawler\lbccrawlerBundle\Entity\Ad $ads
     */
    public function removeAd(\crawler\lbccrawlerBundle\Entity\Ad $ads)
    {
        $this->ads->removeElement($ads);
    }

    /**
     * Get ads
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAds()
    {
        return $this->ads;
    }

    /**
     * Set ad
     *
     * @param \crawler\lbccrawlerBundle\Entity\Ad $ad
     * @return Image
     */
    public function setAd(\crawler\lbccrawlerBundle\Entity\Ad $ad = null)
    {
        $this->ad = $ad;

        return $this;
    }

    /**
     * Get ad
     *
     * @return \crawler\lbccrawlerBundle\Entity\Ad 
     */
    public function getAd()
    {
        return $this->ad;
    }
}
