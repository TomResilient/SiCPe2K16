<?php

namespace Platform\DBBundle\Entity;

/**
 * personincharge
 */
class personincharge
{
    /**
     * @var integer
     */
    private $idpersonincharge;

    /**
     * @var string
     */
    private $namepersonincharge;

    /**
     * @var string
     */
    private $firstnamepersonincharge;

    /**
     * @var string
     */
    private $mailpersonincharge;

    /**
     * @var string
     */
    private $phonepersonincharge;


    /**
     * Get idpersonincharge
     *
     * @return integer
     */
    public function getIdpersonincharge()
    {
        return $this->idpersonincharge;
    }

    /**
     * Set namepersonincharge
     *
     * @param string $namepersonincharge
     *
     * @return personincharge
     */
    public function setNamepersonincharge($namepersonincharge)
    {
        $this->namepersonincharge = $namepersonincharge;

        return $this;
    }

    /**
     * Get namepersonincharge
     *
     * @return string
     */
    public function getNamepersonincharge()
    {
        return $this->namepersonincharge;
    }

    /**
     * Set firstnamepersonincharge
     *
     * @param string $firstnamepersonincharge
     *
     * @return personincharge
     */
    public function setFirstnamepersonincharge($firstnamepersonincharge)
    {
        $this->firstnamepersonincharge = $firstnamepersonincharge;

        return $this;
    }

    /**
     * Get firstnamepersonincharge
     *
     * @return string
     */
    public function getFirstnamepersonincharge()
    {
        return $this->firstnamepersonincharge;
    }

    /**
     * Set mailpersonincharge
     *
     * @param string $mailpersonincharge
     *
     * @return personincharge
     */
    public function setMailpersonincharge($mailpersonincharge)
    {
        $this->mailpersonincharge = $mailpersonincharge;

        return $this;
    }

    /**
     * Get mailpersonincharge
     *
     * @return string
     */
    public function getMailpersonincharge()
    {
        return $this->mailpersonincharge;
    }

    /**
     * Set phonepersonincharge
     *
     * @param string $phonepersonincharge
     *
     * @return personincharge
     */
    public function setPhonepersonincharge($phonepersonincharge)
    {
        $this->phonepersonincharge = $phonepersonincharge;

        return $this;
    }

    /**
     * Get phonepersonincharge
     *
     * @return string
     */
    public function getPhonepersonincharge()
    {
        return $this->phonepersonincharge;
    }
}
