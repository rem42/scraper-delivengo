<?php declare(strict_types=1);

namespace Scraper\ScraperDelivengo\Model;

class Module
{
    private ?string $nom = null;
    private ?string $version = null;
    private ?Createur $createur = null;

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->version = $version;
        return $this;
    }

    public function getCreateur(): ?Createur
    {
        return $this->createur;
    }

    public function setCreateur(?Createur $createur): self
    {
        $this->createur = $createur;
        return $this;
    }
}
