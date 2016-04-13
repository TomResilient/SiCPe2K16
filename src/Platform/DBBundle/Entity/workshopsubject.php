<?php

namespace Platform\DBBundle\Entity;

/**
 * workshopsubject
 */
class workshopsubject
{
    /**
     * @var integer
     */
    private $idworkshop;

    /**
     * @var integer
     */
    private $idsubject;

    /**
     * @var \DateTime
     */
    private $datews;


    /**
     * Set idworkshop
     *
     * @param integer $idworkshop
     *
     * @return workshopsubject
     */
    public function setIdworkshop($idworkshop)
    {
        $this->idworkshop = $idworkshop;

        return $this;
    }

    /**
     * Get idworkshop
     *
     * @return integer
     */
    public function getIdworkshop()
    {
        return $this->idworkshop;
    }

    /**
     * Set idsubject
     *
     * @param integer $idsubject
     *
     * @return workshopsubject
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
     * Set datews
     *
     * @param \DateTime $datews
     *
     * @return workshopsubject
     */
    public function setDatews($datews)
    {
        $this->datews = $datews;

        return $this;
    }

    /**
     * Get datews
     *
     * @return \DateTime
     */
    public function getDatews()
    {
        return $this->datews;
    }
}
