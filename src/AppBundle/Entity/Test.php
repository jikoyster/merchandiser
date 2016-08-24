<?php

namespace AppBundle\Entity;

/**
 * Test
 */
class Test
{
    /**
     * @var string
     */
    private $word;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set word
     *
     * @param string $word
     *
     * @return Test
     */
    public function setWord($word)
    {
        $this->word = $word;

        return $this;
    }

    /**
     * Get word
     *
     * @return string
     */
    public function getWord()
    {
        return $this->word;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
