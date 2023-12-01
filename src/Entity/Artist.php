<?php

namespace App\Entity;

use App\Repository\ArtistRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArtistRepository::class)]
class Artist extends User
{

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $lastname = null;

    #[ORM\Column(length: 255)]
    private ?string $adress = null;

    #[ORM\OneToMany(mappedBy: 'artist', targetEntity: Albumn::class)]
    private Collection $albumns;

    #[ORM\OneToMany(mappedBy: 'artist', targetEntity: Musique::class)]
    private Collection $musiques;

    #[ORM\Column(length: 255)]
    private ?string $type = null;

    public function __construct()
    {
        $this->albumns = new ArrayCollection();
        $this->musiques = new ArrayCollection();
    }



    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): static
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): static
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * @return Collection<int, Albumn>
     */
    public function getAlbumns(): Collection
    {
        return $this->albumns;
    }

    public function addAlbumn(Albumn $albumn): static
    {
        if (!$this->albumns->contains($albumn)) {
            $this->albumns->add($albumn);
            $albumn->setArtist($this);
        }

        return $this;
    }

    public function removeAlbumn(Albumn $albumn): static
    {
        if ($this->albumns->removeElement($albumn)) {
            // set the owning side to null (unless already changed)
            if ($albumn->getArtist() === $this) {
                $albumn->setArtist(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Musique>
     */
    public function getMusiques(): Collection
    {
        return $this->musiques;
    }

    public function addMusique(Musique $musique): static
    {
        if (!$this->musiques->contains($musique)) {
            $this->musiques->add($musique);
            $musique->setArtist($this);
        }

        return $this;
    }

    public function removeMusique(Musique $musique): static
    {
        if ($this->musiques->removeElement($musique)) {
            // set the owning side to null (unless already changed)
            if ($musique->getArtist() === $this) {
                $musique->setArtist(null);
            }
        }

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }
}
