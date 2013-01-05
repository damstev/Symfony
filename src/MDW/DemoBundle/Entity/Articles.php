<?php

namespace MDW\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * MDW\DemoBundle\Entity\Articles
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MDW\DemoBundle\Entity\ArticlesRepository")
 */
class Articles {

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=255)
     * @Assert\NotNull(message="El titulo no puede ser nulo")
     * @Assert\MaxLength(limit=25, message="El titulo no debe tener mas de {{ limit }} caracteres")  
     * @Assert\MinLength(limit=5, message="El titulo no debe tener menos de {{ limit }} caracteres")  
     */
    private $title;

    /**
     * @var string $author
     *
     * @ORM\Column(name="author", type="string", length=255)       
     */
    private $author;

    /**
     * @var string $content
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var string $tags
     *
     * @ORM\Column(name="tags", type="string", length=255)
     */
    private $tags;

    /**
     * @var \DateTime $created
     *
     * @ORM\Column(name="created", type="date")
     */
    private $created;

    /**
     * @var \DateTime $updated
     *
     * @ORM\Column(name="updated", type="date")
     */
    private $updated;

    /**
     * @var string $slug
     *
     * @ORM\Column(name="slug", type="string", length=255)
     */
    private $slug;

    /**
     * @var string $category
     *
     * @ORM\Column(name="category", type="string", length=255)
     */
    private $category;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Articles
     */
    public function setTitle($title) {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return Articles
     */
    public function setAuthor($author) {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor() {
        return $this->author;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Articles
     */
    public function setContent($content) {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent() {
        return $this->content;
    }

    /**
     * Set tags
     *
     * @param string $tags
     * @return Articles
     */
    public function setTags($tags) {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return string 
     */
    public function getTags() {
        return $this->tags;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Articles
     */
    public function setCreated($created) {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated() {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Articles
     */
    public function setUpdated($updated) {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated() {
        return $this->updated;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Articles
     */
    public function setSlug($slug) {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug() {
        return $this->slug;
    }

    /**
     * Set category
     *
     * @param string $category
     * @return Articles
     */
    public function setCategory($category) {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string 
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * @ORM\OneToMany(targetEntity="Comments", mappedBy="article")
     */
    private $comments;

    public function __construct() {
        $this->comments = new \Doctrine\Common\Collections\
                ArrayCollection();
    }

    public function addComments(\MDW\DemoBundle\Entity\Comments $comments) {
        $this->comments[] = $comments;
    }

    public function getComments() {
        return $this->comments;
    }

}
