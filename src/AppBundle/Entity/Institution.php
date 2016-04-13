<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Institution
 *
 * @ORM\Table(name="institution")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\InstitutionRepository")
 */
class Institution
{
    /**
     * @var int
     *
     * @ORM\Column(name="idinstitution", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idInstitution;

    /**
     * @var string
     *
     * @ORM\Column(name="nameinstitution", type="string", length=255)
     */
    private $nameInstitution;

    /**
     * @var string
     *
     * @ORM\Column(name="adressinstitution", type="string", length=255, unique=true)
     */
    private $adressinstitution;

    /**
     * @var int
     *
     * @ORM\Column(name="phoneinstitution", type="integer", unique=true)
     */
    private $phoneInstitution;


    /**
     * Get idInstitution
     *
     * @return int
     */
    public function getIdInstitution()
    {
        return $this->idInstitution;
    }

    /**
     * Set nameInstitution
     *
     * @param string $nameInstitution
     *
     * @return Institution
     */
    public function setNameInstitution($nameInstitution)
    {
        $this->nameInstitution = $nameInstitution;

        return $this;
    }

    /**
     * Get nameInstitution
     *
     * @return string
     */
    public function getNameInstitution()
    {
        return $this->nameInstitution;
    }

    /**
     * Set adressInstitution
     *
     * @param string $adressInstitution
     *
     * @return Institution
     */
    public function setAdressInstitution($adressInstitution)
    {
        $this->adressInstitution = $adressInstitution;

        return $this;
    }

    /**
     * Get adressInstitution
     *
     * @return string
     */
    public function getAdressInstitution()
    {
        return $this->adressInstitution;
    }

    /**
     * Set phoneInstitution
     *
     * @param integer $phoneInstitution
     *
     * @return Institution
     */
    public function setPhoneInstitution($phoneInstitution)
    {
        $this->phoneInstitution = $phoneInstitution;

        return $this;
    }

    /**
     * Get phoneInstitution
     *
     * @return int
     */
    public function getPhoneInstitution()
    {
        return $this->phoneInstitution;
    }
}
