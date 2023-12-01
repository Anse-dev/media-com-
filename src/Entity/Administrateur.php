<?php

namespace App\Entity;

use App\Repository\AdministrateurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdministrateurRepository::class)]
class Administrateur extends User
{


    #[ORM\Column(length: 255)]
    private ?string $privilege = null;


    public function getPrivilege(): ?string
    {
        return $this->privilege;
    }

    public function setPrivilege(string $privilege): static
    {
        $this->privilege = $privilege;

        return $this;
    }
}
