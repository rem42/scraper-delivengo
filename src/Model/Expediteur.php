<?php declare(strict_types=1);

namespace Scraper\ScraperDelivengo\Model;

class Expediteur
{
    private ?string $raisonSociale = null;
    private ?string $nom = null;
    private ?string $complementVoie = null;
    private ?string $voie = null;
    private ?string $boitePostale = null;
    private ?string $codePostalCommune = null;

    public function getRaisonSociale(): ?string
    {
        return $this->raisonSociale;
    }

    public function setRaisonSociale(?string $raisonSociale): self
    {
        $this->raisonSociale = $raisonSociale;
        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    public function getComplementVoie(): ?string
    {
        return $this->complementVoie;
    }

    public function setComplementVoie(?string $complementVoie): self
    {
        $this->complementVoie = $complementVoie;
        return $this;
    }

    public function getVoie(): ?string
    {
        return $this->voie;
    }

    public function setVoie(?string $voie): self
    {
        $this->voie = $voie;
        return $this;
    }

    public function getBoitePostale(): ?string
    {
        return $this->boitePostale;
    }

    public function setBoitePostale(?string $boitePostale): self
    {
        $this->boitePostale = $boitePostale;
        return $this;
    }

    public function getCodePostalCommune(): ?string
    {
        return $this->codePostalCommune;
    }

    public function setCodePostalCommune(?string $codePostalCommune): self
    {
        $this->codePostalCommune = $codePostalCommune;
        return $this;
    }
}
