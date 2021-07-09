<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\WordRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=WordRepository::class)
 */
class Word
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
    private $schwText;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pronounciation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $deText;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $enText;



    /**
     * @ORM\Column(type="boolean",options={"default" : false})
     */
    private $published;

    /**
     * @ORM\Column(type="datetime")
     */
    private $publishDate;

    /**
     * @ORM\OneToMany(targetEntity=Sentence::class, mappedBy="relatedWord")
     */
    private $sentences;




    public function __construct()
    {
        $this->sentences = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSchwText(): ?string
    {
        return $this->schwText;
    }

    public function setSchwText(string $schwText): self
    {
        $this->schwText = $schwText;

        return $this;
    }

    public function getPronounciation(): ?string
    {
        return $this->pronounciation;
    }

    public function setPronounciation(string $pronounciation): self
    {
        $this->pronounciation = $pronounciation;

        return $this;
    }

    public function getDeText(): ?string
    {
        return $this->deText;
    }

    public function setDeText(string $deText): self
    {
        $this->deText = $deText;

        return $this;
    }

    public function getEnText(): ?string
    {
        return $this->enText;
    }

    public function setEnText(string $enText): self
    {
        $this->enText = $enText;

        return $this;
    }



    public function getPublished(): ?bool
    {
        return $this->published;
    }

    public function setPublished(bool $published): self
    {
        $this->published = $published;

        return $this;
    }

    public function getPublishDate(): ?\DateTimeInterface
    {
        return $this->publishDate;
    }

    public function setPublishDate(\DateTimeInterface $publishDate): self
    {
        $this->publishDate = $publishDate;

        return $this;
    }

    /**
     * @return Collection|sentence[]
     */
    public function getSentences(): Collection
    {
        return $this->sentences;
    }

    public function addSentence(sentence $sentence): self
    {
        if (!$this->sentences->contains($sentence)) {
            $this->sentences[] = $sentence;
            $sentence->setRelatedWord($this);
        }

        return $this;
    }

    public function removeSentence(sentence $sentence): self
    {
        if ($this->sentences->removeElement($sentence)) {
            // set the owning side to null (unless already changed)
            if ($sentence->getRelatedWord() === $this) {
                $sentence->setRelatedWord(null);
            }
        }

        return $this;
    }



}
