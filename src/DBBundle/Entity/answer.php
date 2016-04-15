<?php

namespace Platform\DBBundle\Entity;

/**
 * answer
 */
class answer
{
    /**
     * @var integer
     */
    private $idanswer;

    /**
     * @var string
     */
    private $answer;

    /**
     * @var integer
     */
    private $value;


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
     * Set answer
     *
     * @param string $answer
     *
     * @return answer
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get answer
     *
     * @return string
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Set value
     *
     * @param integer $value
     *
     * @return answer
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return integer
     */
    public function getValue()
    {
        return $this->value;
    }
}

