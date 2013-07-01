<?php

namespace ExtAss\exampdbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * movies
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ExtAss\exampdbBundle\Entity\moviesRepository")
 */
class movies
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;
    /**
     * @var string
     *
     * @ORM\Column(name="director", type="string", length=255)
     */
    private $director;
     /**
     * @var date
     *
     * @ORM\Column(name="released", type="string")
     */
    private $released;
     /**
     * @var integer
     *
     * @ORM\Column(name="genre", type="integer", length=20)
     */
    private $genre;
    /**
     * @var string
     *
     * @ORM\Column(name="tagline", type="string", length=255)
     */
    private $tagline;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return movies
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * Set director
     *
     * @param string $director
     * @return movies
     */
    public function setDirector($director)
    {
        $this->director = $director;
    
        return $this;
    }

    /**
     * Get director
     *
     * @return string 
     */
    public function getDirector()
    {
        return $this->director;
    }
     /**
     * Set released
     *
     * @param date $released
     * @return movies
     */
    public function setReleased($released)
    {
        $this->released = $released;
    
        return $this;
    }

    /**
     * Get released
     *
     * @return date
     */
    public function getReleased()
    {
        return $this->released;
    }
    /**
     * Set genre
     *
     * @param integer $genre
     * @return movies
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
    
        return $this;
    }

    /**
     * Get genre
     *
     * @return integer 
     */
    public function getGenre()
    {
        return $this->genre;
    }
    /**
     * Set tagline
     *
     * @param string $tagline
     * @return movies
     */
    public function setTagline($tagline)
    {
        $this->tagline = $tagline;
    
        return $this;
    }

    /**
     * Get tagline
     *
     * @return string 
     */
    public function getTagline()
    {
        return $this->tagline;
    }
}
