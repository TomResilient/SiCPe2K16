<?php

namespace Platform\DBBundle\Entity;

/**
 * question
 */
class question
{
    /**
     * @var integer
     */
    private $idquestion;

    /**
     * @var string
     */
    private $question;

    /**
     * @var string
     */
    private $category;


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
     * Set question
     *
     * @param string $question
     *
     * @return question
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set category
     *
     * @param string $category
     *
     * @return question
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }
}

