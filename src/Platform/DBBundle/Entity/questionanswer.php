<?php

namespace Platform\DBBundle\Entity;

/**
 * questionanswer
 */
class questionanswer
{
    /**
     * @var integer
     */
    private $idquestion;

    /**
     * @var integer
     */
    private $idanswer;

    /**
     * @var integer
     */
    private $idsurvey;


    /**
     * Set idquestion
     *
     * @param integer $idquestion
     *
     * @return questionanswer
     */
    public function setIdquestion($idquestion)
    {
        $this->idquestion = $idquestion;

        return $this;
    }

    /**
     * Get idquestion
     *
     * @return integer
     */
    public function getIdquestion()
    {
        return $this->idquestion;
    }

    /**
     * Set idanswer
     *
     * @param integer $idanswer
     *
     * @return questionanswer
     */
    public function setIdanswer($idanswer)
    {
        $this->idanswer = $idanswer;

        return $this;
    }

    /**
     * Get idanswer
     *
     * @return integer
     */
    public function getIdanswer()
    {
        return $this->idanswer;
    }

    /**
     * Set idsurvey
     *
     * @param integer $idsurvey
     *
     * @return questionanswer
     */
    public function setIdsurvey($idsurvey)
    {
        $this->idsurvey = $idsurvey;

        return $this;
    }

    /**
     * Get idsurvey
     *
     * @return integer
     */
    public function getIdsurvey()
    {
        return $this->idsurvey;
    }
}
