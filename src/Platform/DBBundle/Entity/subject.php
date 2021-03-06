<?php

namespace Platform\DBBundle\Entity;

/**
 * subject
 */
class subject
{
    /**
     * @var integer
     */
    private $idsubject;

    /**
     * @var integer
     */
    private $subjectnumber;

    /**
     * @var integer
     */
    private $sexe;

    /**
     * @var integer
     */
    private $bornyear;

    /**
     * @var integer
     */
    private $postalcode;

    /**
     * @var \DateTime
     */
    private $creationdate;

    /**
     * @var boolean
     */
    private $status;

    /**
     * @var string
     */
    private $commentary;

    /**
     * @var \Platform\DBBundle\Entity\institution
     */
    private $idinstitution;


    /**
     * Get idsubject
     *
     * @return integer
     */
    public function getIdsubject()
    {
        return $this->idsubject;
    }

    /**
     * Set subjectnumber
     *
     * @param integer $subjectnumber
     *
     * @return subject
     */
    public function setSubjectnumber($subjectnumber)
    {
        $this->subjectnumber = $subjectnumber;

        return $this;
    }

    /**
     * Get subjectnumber
     *
     * @return integer
     */
    public function getSubjectnumber()
    {
        return $this->subjectnumber;
    }

    /**
     * Set sexe
     *
     * @param integer $sexe
     *
     * @return subject
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return integer
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set bornyear
     *
     * @param integer $bornyear
     *
     * @return subject
     */
    public function setBornyear($bornyear)
    {
        $this->bornyear = $bornyear;

        return $this;
    }

    /**
     * Get bornyear
     *
     * @return integer
     */
    public function getBornyear()
    {
        return $this->bornyear;
    }

    /**
     * Set postalcode
     *
     * @param integer $postalcode
     *
     * @return subject
     */
    public function setPostalcode($postalcode)
    {
        $this->postalcode = $postalcode;

        return $this;
    }

    /**
     * Get postalcode
     *
     * @return integer
     */
    public function getPostalcode()
    {
        return $this->postalcode;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return subject
     */
    public function setCreationdate($creationdate)
    {
        $this->creationdate = $creationdate;

        return $this;
    }

    /**
     * Get creationdate
     *
     * @return \DateTime
     */
    public function getCreationdate()
    {
        return $this->creationdate;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return subject
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
     * Set commentary
     *
     * @param string $commentary
     *
     * @return subject
     */
    public function setCommentary($commentary)
    {
        $this->commentary = $commentary;

        return $this;
    }

    /**
     * Get commentary
     *
     * @return string
     */
    public function getCommentary()
    {
        return $this->commentary;
    }

    /**
     * Set idinstitution
     *
     * @param \Platform\DBBundle\Entity\institution $idinstitution
     *
     * @return subject
     */
    public function setIdinstitution(\Platform\DBBundle\Entity\institution $idinstitution = null)
    {
        $this->idinstitution = $idinstitution;

        return $this;
    }

    /**
     * Get idinstitution
     *
     * @return \Platform\DBBundle\Entity\institution
     */
    public function getIdinstitution()
    {
        return $this->idinstitution;
    }
    /**
     * @var boolean
     */
    private $frail;


    /**
     * Set frail
     *
     * @param boolean $frail
     *
     * @return subject
     */
    public function setFrail($frail)
    {
        $this->frail = $frail;

        return $this;
    }

    /**
     * Get frail
     *
     * @return boolean
     */
    public function getFrail()
    {
        return $this->frail;
    }
    /**
     * @var integer
     */
    private $realid;


    /**
     * Set realid
     *
     * @param integer $realid
     *
     * @return subject
     */
    public function setRealid($realid)
    {
        $this->realid = $realid;

        return $this;
    }

    /**
     * Get realid
     *
     * @return integer
     */
    public function getRealid()
    {
        return $this->realid;
    }
}
