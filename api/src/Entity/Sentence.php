<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\SentenceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=SentenceRepository::class)
 */
class Sentence
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $schw;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $de;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $en;

    /**
     * @ORM\ManyToOne(targetEntity=Word::class, inversedBy="sentences",cascade={"persist","remove"})
     */
    private $relatedWord;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSchw(): ?string
    {
        return $this->schw;
    }

    public function setSchw(string $schw): self
    {
        $this->schw = $schw;

        return $this;
    }

    public function getDe(): ?string
    {
        return $this->de;
    }

    public function setDe(string $de): self
    {
        $this->de = $de;

        return $this;
    }

    public function getEn(): ?string
    {
        return $this->en;
    }

    public function setEn(string $en): self
    {
        $this->en = $en;

        return $this;
    }

    public function getRelatedWord(): ?Word
    {
        return $this->relatedWord;
    }

    public function setRelatedWord(?Word $relatedWord): self
    {
        $this->relatedWord = $relatedWord;

        return $this;
    }

}
