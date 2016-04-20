<?php

namespace Platform\DBBundle\Entity;

/**
 * workshop
 */
class workshop
{
    /**
     * @var integer
     */
    private $idworkshop;

    /**
     * @var string
     */
    private $nameworkshop;

    /**
     * @var \Platform\DBBundle\Entity\personincharge
     */
    private $idpersonincharge;


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
     * Set nameworkshop
     *
     * @param string $nameworkshop
     *
     * @return workshop
     */
    public function setNameworkshop($nameworkshop)
    {
        $this->nameworkshop = $nameworkshop;

        return $this;
    }

    /**
     * Get nameworkshop
     *
     * @return string
     */
    public function getNameworkshop()
    {
        return $this->nameworkshop;
    }

    /**
     * Set idpersonincharge
     *
     * @param \Platform\DBBundle\Entity\personincharge $idpersonincharge
     *
     * @return workshop
     */
    public function setIdpersonincharge(\Platform\DBBundle\Entity\personincharge $idpersonincharge)
    {
        $this->idpersonincharge = $idpersonincharge;

        return $this;
    }

    /**
     * Get idpersonincharge
     *
     * @return \Platform\DBBundle\Entity\personincharge
     */
    public function getIdpersonincharge()
    {
        return $this->idpersonincharge;
    }
}
