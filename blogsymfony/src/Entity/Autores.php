<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Autores
 *
 * @ORM\Table(name="autores")
 * @ORM\Entity
 */
class Autores
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=5, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=150, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=150, nullable=false)
     */
    private $author;

    public function getId(): ?string
    {
        return $this->id;
    }
    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }


}
