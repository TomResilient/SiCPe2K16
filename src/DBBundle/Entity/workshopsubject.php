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
    private $idworkshopsubject;

    /**
     * @var \DateTime
     */
    private $datews;

    /**
     * @var \Platform\DBBundle\Entity\workshop
     */
    private $idworkshop;

    /**
     * @var \Platform\DBBundle\Entity\subject
     */
    private $idsubject;


    /**
     * Get idworkshopsubject
     *
     * @return integer
     */
    public function getIdworkshopsubject()
    {
        return $this->idworkshopsubject;
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

    /**
     * Set idworkshop
     *
     * @param \Platform\DBBundle\Entity\workshop $idworkshop
     *
     * @return workshopsubject
     */
    public function setIdworkshop(\Platform\DBBundle\Entity\workshop $idworkshop)
    {
        $this->idworkshop = $idworkshop;

        return $this;
    }

    /**
     * Get idworkshop
     *
     * @return \Platform\DBBundle\Entity\workshop
     */
    public function getIdworkshop()
    {
        return $this->idworkshop;
    }

    /**
     * Set idsubject
     *
     * @param \Platform\DBBundle\Entity\subject $idsubject
     *
     * @return workshopsubject
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

