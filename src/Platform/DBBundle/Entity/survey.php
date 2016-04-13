<?php

namespace Platform\DBBundle\Entity;

/**
 * survey
 */
class survey
{
    /**
     * @var integer
     */
    private $idsurvey;

    /**
     * @var integer
     */
    private $idsubject;

    /**
     * @var string
     */
    private $commentary;

    /**
     * @var \DateTime
     */
    private $datesurvey;


    /**
     * Get idsurvey
     *
     * @return integer
     */
    public function getIdsurvey()
    {
        return $this->idsurvey;
    }

    /**
     * Set idsubject
     *
     * @param integer $idsubject
     *
     * @return survey
     */
    public function setIdsubject($idsubject)
    {
        $this->idsubject = $idsubject;

        return $this;
    }

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
     * Set commentary
     *
     * @param string $commentary
     *
     * @return survey
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
     * Set datesurvey
     *
     * @param \DateTime $datesurvey
     *
     * @return survey
     */
    public function setDatesurvey($datesurvey)
    {
        $this->datesurvey = $datesurvey;

        return $this;
    }

    /**
     * Get datesurvey
     *
     * @return \DateTime
     */
    public function getDatesurvey()
    {
        return $this->datesurvey;
    }
}
