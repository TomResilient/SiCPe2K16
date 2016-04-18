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
     * @var string
     */
    private $commentary;

    /**
     * @var \DateTime
     */
    private $datesurvey;

    /**
     * @var \Platform\DBBundle\Entity\subject
     */
    private $idsubject;


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

    /**
     * Set idsubject
     *
     * @param \Platform\DBBundle\Entity\subject $idsubject
     *
     * @return survey
     */
    public function setIdsubject(\Platform\DBBundle\Entity\subject $idsubject)
    {
        $this->idsubject = $idsubject;

        return $this;
    }

    /**
     * Get idsubject
     *
     * @return \Platform\DBBundle\Entity\subject
     */
    public function getIdsubject()
    {
        return $this->idsubject;
    }
}

