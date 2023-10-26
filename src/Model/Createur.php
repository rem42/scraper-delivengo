<?php declare(strict_types=1);

namespace Scraper\ScraperDelivengo\Model;

class Createur
{
    private ?string $nom = null;

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }
}
