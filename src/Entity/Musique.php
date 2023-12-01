<?php

namespace App\Entity;

use App\Repository\MusiqueRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MusiqueRepository::class)]
class Musique
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $createdDate = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(nullable: true)]
    private ?int $numberOfDownload = null;

    #[ORM\ManyToOne(inversedBy: 'musiques')]
    private ?Artist $artist = null;

    #[ORM\ManyToOne(inversedBy: 'musiques')]
    private ?Albumn $albumn = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreatedDate(): ?\DateTimeInterface
    {
        return $this->createdDate;
    }

    public function setCreatedDate(\DateTimeInterface $createdDate): static
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getNumberOfDownload(): ?int
    {
        return $this->numberOfDownload;
    }

    public function setNumberOfDownload(?int $numberOfDownload): static
    {
        $this->numberOfDownload = $numberOfDownload;

        return $this;
    }

    public function getArtist(): ?Artist
    {
        return $this->artist;
    }

    public function setArtist(?Artist $artist): static
    {
        $this->artist = $artist;

        return $this;
    }

    public function getAlbumn(): ?Albumn
    {
        return $this->albumn;
    }

    public function setAlbumn(?Albumn $albumn): static
    {
        $this->albumn = $albumn;

        return $this;
    }
}
