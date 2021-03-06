<?php

namespace GratitudeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GratitudeList
 */
class GratitudeList
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $userId;

    /**
     * @var string
     */
    private $item;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var int
     */
    private $shareable;

    /**
     * @var int
     */
    private $anonymous;



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
     * Set userId
     *
     * @param integer $userId
     * @return GratitudeList
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set item
     *
     * @param string $item
     * @return GratitudeList
     */
    public function setItem($item)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item
     *
     * @return string 
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return GratitudeList
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set shareable
     *
     * @param integer $shareable
     * @return GratitudeList
     */
    public function setShareable($shareable)
    {
        $this->shareable = $shareable;

        return $this;
    }

    /**
     * Get shareable
     *
     * @return integer 
     */
    public function getShareable()
    {
        return $this->shareable;
    }

    /**
     * Set anonymous
     *
     * @param integer $anonymous
     * @return GratitudeList
     */
    public function setAnonymous($anonymous)
    {
        $this->anonymous = $anonymous;

        return $this;
    }

    /**
     * Get anonymous
     *
     * @return integer
     */
    public function getAnonymous()
    {
        return $this->anonymous;
    }
}
