<?php declare(strict_types=1);

namespace Scraper\ScraperDelivengo\Model;

class Article
{
    private ?string $descriptionDetaillee = null;
    private ?string $quantite = null;
    private ?float $poids = null;
    private ?string $valeur = null;
    private ?string $paysOrigine = null;
    private ?string $numTarifaire = null;

    public function getDescriptionDetaillee(): ?string
    {
        return $this->descriptionDetaillee;
    }

    public function setDescriptionDetaillee(?string $descriptionDetaillee): self
    {
        $this->descriptionDetaillee = $descriptionDetaillee;
        return $this;
    }

    public function getQuantite(): ?string
    {
        return $this->quantite;
    }

    public function setQuantite(?string $quantite): self
    {
        $this->quantite = $quantite;
        return $this;
    }

    public function getPoids(): ?float
    {
        return $this->poids;
    }

    public function setPoids(?float $poids): self
    {
        $this->poids = $poids;
        return $this;
    }

    public function getValeur(): ?string
    {
        return $this->valeur;
    }

    public function setValeur(?string $valeur): self
    {
        $this->valeur = $valeur;
        return $this;
    }

    public function getPaysOrigine(): ?string
    {
        return $this->paysOrigine;
    }

    public function setPaysOrigine(?string $paysOrigine): self
    {
        $this->paysOrigine = $paysOrigine;
        return $this;
    }

    public function getNumTarifaire(): ?string
    {
        return $this->numTarifaire;
    }

    public function setNumTarifaire(?string $numTarifaire): self
    {
        $this->numTarifaire = $numTarifaire;
        return $this;
    }
}
