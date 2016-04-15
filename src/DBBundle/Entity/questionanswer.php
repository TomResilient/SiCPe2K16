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
    private $idquestionanswer;

    /**
     * @var \Platform\DBBundle\Entity\question
     */
    private $idquestion;

    /**
     * @var \Platform\DBBundle\Entity\answer
     */
    private $idanswer;

    /**
     * @var \Platform\DBBundle\Entity\survey
     */
    private $idsurvey;


    /**
     * Get idquestionanswer
     *
     * @return integer
     */
    public function getIdquestionanswer()
    {
        return $this->idquestionanswer;
    }

    /**
     * Set idquestion
     *
     * @param \Platform\DBBundle\Entity\question $idquestion
     *
     * @return questionanswer
     */
    public function setIdquestion(\Platform\DBBundle\Entity\question $idquestion)
    {
        $this->idquestion = $idquestion;

        return $this;
    }

    /**
     * Get idquestion
     *
     * @return \Platform\DBBundle\Entity\question
     */
    public function getIdquestion()
    {
        return $this->idquestion;
    }

    /**
     * Set idanswer
     *
     * @param \Platform\DBBundle\Entity\answer $idanswer
     *
     * @return questionanswer
     */
    public function setIdanswer(\Platform\DBBundle\Entity\answer $idanswer)
    {
        $this->idanswer = $idanswer;

        return $this;
    }

    /**
     * Get idanswer
     *
     * @return \Platform\DBBundle\Entity\answer
     */
    public function getIdanswer()
    {
        return $this->idanswer;
    }

    /**
     * Set idsurvey
     *
     * @param \Platform\DBBundle\Entity\survey $idsurvey
     *
     * @return questionanswer
     */
    public function setIdsurvey(\Platform\DBBundle\Entity\survey $idsurvey)
    {
        $this->idsurvey = $idsurvey;

        return $this;
    }

    /**
     * Get idsurvey
     *
     * @return \Platform\DBBundle\Entity\survey
     */
    public function getIdsurvey()
    {
        return $this->idsurvey;
    }
}

