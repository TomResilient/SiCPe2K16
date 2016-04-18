<?php

namespace Platform\DBBundle\Entity;

/**
 * institution
 */
class institution
{
    /**
     * @var integer
     */
    private $idinstitution;

    /**
     * @var string
     */
    private $nameinstitution;

    /**
     * @var string
     */
    private $adressinstitution;

    /**
     * @var string
     */
    private $phoneinstitution;


    /**
     * Get idinstitution
     *
     * @return integer
     */
    public function getIdinstitution()
    {
        return $this->idinstitution;
    }

    /**
     * Set nameinstitution
     *
     * @param string $nameinstitution
     *
     * @return institution
     */
    public function setNameinstitution($nameinstitution)
    {
        $this->nameinstitution = $nameinstitution;

        return $this;
    }

    /**
     * Get nameinstitution
     *
     * @return string
     */
    public function getNameinstitution()
    {
        return $this->nameinstitution;
    }

    /**
     * Set adressinstitution
     *
     * @param string $adressinstitution
     *
     * @return institution
     */
    public function setAdressinstitution($adressinstitution)
    {
        $this->adressinstitution = $adressinstitution;

        return $this;
    }

    /**
     * Get adressinstitution
     *
     * @return string
     */
    public function getAdressinstitution()
    {
        return $this->adressinstitution;
    }

    /**
     * Set phoneinstitution
     *
     * @param string $phoneinstitution
     *
     * @return institution
     */
    public function setPhoneinstitution($phoneinstitution)
    {
        $this->phoneinstitution = $phoneinstitution;

        return $this;
    }

    /**
     * Get phoneinstitution
     *
     * @return string
     */
    public function getPhoneinstitution()
    {
        return $this->phoneinstitution;
    }
}

