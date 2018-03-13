<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 */
class Users
{
    /**
     * @var int
     *
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var int
     */
    private $sobrietyDay;

    /**
     * @var int
     */
    private $sobrietyMonth;

    /**
     * @var int
     */
    private $sobrietyYear;

    /**
     * @var string
     */
    private $fellowship;

    /**
     * @var string
     */
    private $substanceOfChoice;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var string
     */
    private $phoneNumber;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $zipCode;

    /**
     * @var string
     */
    private $sponsor;

    /**
     * @var string
     */
    private $sponsorPhoneNumber;

    /**
     * @var int
     */
    private $step;

    /**
     * @var string
     */
    private $bio;


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
     * Set name
     *
     * @param string $name
     * @return Users
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
     * Set email
     *
     * @param string $email
     * @return Users
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Users
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set sobrietyDay
     *
     * @param integer $sobrietyDay
     * @return Users
     */
    public function setSobrietyDay($sobrietyDay)
    {
        $this->sobrietyDay = $sobrietyDay;

        return $this;
    }

    /**
     * Get sobrietyDay
     *
     * @return integer 
     */
    public function getSobrietyDay()
    {
        return $this->sobrietyDay;
    }

    /**
     * Set sobrietyMonth
     *
     * @param integer $sobrietyMonth
     * @return Users
     */
    public function setSobrietyMonth($sobrietyMonth)
    {
        $this->sobrietyMonth = $sobrietyMonth;

        return $this;
    }

    /**
     * Get sobrietyMonth
     *
     * @return integer 
     */
    public function getSobrietyMonth()
    {
        return $this->sobrietyMonth;
    }

    /**
     * Set sobrietyYear
     *
     * @param integer $sobrietyYear
     * @return Users
     */
    public function setSobrietyYear($sobrietyYear)
    {
        $this->sobrietyYear = $sobrietyYear;

        return $this;
    }

    /**
     * Get sobrietyYear
     *
     * @return integer 
     */
    public function getSobrietyYear()
    {
        return $this->sobrietyYear;
    }

    /**
     * Set fellowship
     *
     * @param string $fellowship
     * @return Users
     */
    public function setFellowship($fellowship)
    {
        $this->fellowship = $fellowship;

        return $this;
    }

    /**
     * Get fellowship
     *
     * @return string 
     */
    public function getFellowship()
    {
        return $this->fellowship;
    }

    /**
     * Set substanceOfChoice
     *
     * @param string $substanceOfChoice
     * @return Users
     */
    public function setSubstanceOfChoice($substanceOfChoice)
    {
        $this->substanceOfChoice = $substanceOfChoice;

        return $this;
    }

    /**
     * Get substanceOfChoice
     *
     * @return string 
     */
    public function getSubstanceOfChoice()
    {
        return $this->substanceOfChoice;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Users
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
     * Set phoneNumber
     *
     * @param string $phoneNumber
     * @return Users
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string 
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Users
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return Users
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set zipCode
     *
     * @param string $zipCode
     * @return Users
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get zipCode
     *
     * @return string 
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set sponsor
     *
     * @param string $sponsor
     * @return Users
     */
    public function setSponsor($sponsor)
    {
        $this->sponsor = $sponsor;

        return $this;
    }

    /**
     * Get sponsor
     *
     * @return string 
     */
    public function getSponsor()
    {
        return $this->sponsor;
    }

    /**
     * Set sponsorPhoneNumber
     *
     * @param string $sponsorPhoneNumber
     * @return Users
     */
    public function setSponsorPhoneNumber($sponsorPhoneNumber)
    {
        $this->sponsorPhoneNumber = $sponsorPhoneNumber;

        return $this;
    }

    /**
     * Get sponsorPhoneNumber
     *
     * @return string 
     */
    public function getSponsorPhoneNumber()
    {
        return $this->sponsorPhoneNumber;
    }

    /**
     * Set step
     *
     * @param integer $step
     * @return Users
     */
    public function setStep($step)
    {
        $this->step = $step;

        return $this;
    }

    /**
     * Get step
     *
     * @return integer 
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * Set bio
     *
     * @param string $bio
     * @return Users
     */
    public function setBio($bio)
    {
        $this->bio = $bio;

        return $this;
    }

    /**
     * Get bio
     *
     * @return string 
     */
    public function getBio()
    {
        return $this->bio;
    }
}
