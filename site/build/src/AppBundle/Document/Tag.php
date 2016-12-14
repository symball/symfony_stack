<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
/**
 * @MongoDB\Document(repositoryClass="AppBundle\Repository\TagRepository")
 */
class Tag
{
    /**
     * @MongoDB\Id
     */
    protected $id;
    /**
     * @MongoDB\String
     */
    protected $title;
    /**
     * @MongoDB\String
     */
    protected $slug;
    /**
     * @MongoDB\String
     */
    protected $type;
    /**
     * @MongoDB\String
     */
    protected $longValue;
    /**
     * @MongoDB\Integer
     */
    protected $order;
    /**
     * @MongoDB\EmbedMany(targetDocument="TagKeyPair")
     */
    protected $keyPairs;
    /**
     * @MongoDB\Integer
     */
    protected $level;
    protected $valueMap = array();
    /**
     * START CUSTOM FUNCTIONS
     */
    public function __toString()
    {
      return $this->getTitle();
    }
    public function getKeyValues()
    {
     if($this->valueMap) { return $this->valueMap; }
     if($keyPairs = $this->keyPairs)
     {
      foreach ($keyPairs as $pair) {
       $this->valueMap[$pair->getKey()] = $pair->getValue();
      }
     }
     return $this->valueMap;
    }
    /**
     * END CUSTOM FUNCTIONS
     */
    public function __construct()
    {
        $this->keyPairs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return $this
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
        return $this;
    }

    /**
     * Get slug
     *
     * @return string $slug
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return string $type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set longValue
     *
     * @param string $longValue
     * @return $this
     */
    public function setLongValue($longValue)
    {
        $this->longValue = $longValue;
        return $this;
    }

    /**
     * Get longValue
     *
     * @return string $longValue
     */
    public function getLongValue()
    {
        return $this->longValue;
    }

    /**
     * Set order
     *
     * @param integer $order
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * Get order
     *
     * @return integer $order
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Add keyPair
     *
     * @param AppBundle\Document\TagKeyPair $keyPair
     */
    public function addKeyPair(\AppBundle\Document\TagKeyPair $keyPair)
    {
        $this->keyPairs[] = $keyPair;
    }

    /**
     * Remove keyPair
     *
     * @param AppBundle\Document\TagKeyPair $keyPair
     */
    public function removeKeyPair(\AppBundle\Document\TagKeyPair $keyPair)
    {
        $this->keyPairs->removeElement($keyPair);
    }

    /**
     * Get keyPairs
     *
     * @return \Doctrine\Common\Collections\Collection $keyPairs
     */
    public function getKeyPairs()
    {
        return $this->keyPairs;
    }

    /**
     * Set level
     *
     * @param integer $level
     * @return $this
     */
    public function setLevel($level)
    {
        $this->level = $level;
        return $this;
    }

    /**
     * Get level
     *
     * @return integer $level
     */
    public function getLevel()
    {
        return $this->level;
    }
}
