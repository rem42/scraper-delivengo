<?php declare(strict_types=1);

namespace Scraper\ScraperDelivengo\Model;

class DocumentsDouanier
{
    /** @var array<int, int> */
    private array $envoiNature = [];
    private ?int $envoiCommercial = null;
    private ?string $observation = null;
    private ?string $numLicence = null;
    private ?string $numCertificat = null;
    private ?string $numFacture = null;
    private ?string $fraisPort = null;
    /** @var array<int, Article> */
    private array $articles = [];

    public function getEnvoiNature(): array
    {
        return $this->envoiNature;
    }

    public function addEnvoiNature(int $envoiNature): self
    {
        $this->envoiNature[] = $envoiNature;
        return $this;
    }

    public function getEnvoiCommercial(): ?int
    {
        return $this->envoiCommercial;
    }

    public function setEnvoiCommercial(?int $envoiCommercial): self
    {
        $this->envoiCommercial = $envoiCommercial;
        return $this;
    }

    public function getObservation(): ?string
    {
        return $this->observation;
    }

    public function setObservation(?string $observation): self
    {
        $this->observation = $observation;
        return $this;
    }

    public function getNumLicence(): ?string
    {
        return $this->numLicence;
    }

    public function setNumLicence(?string $numLicence): self
    {
        $this->numLicence = $numLicence;
        return $this;
    }

    public function getNumCertificat(): ?string
    {
        return $this->numCertificat;
    }

    public function setNumCertificat(?string $numCertificat): self
    {
        $this->numCertificat = $numCertificat;
        return $this;
    }

    public function getNumFacture(): ?string
    {
        return $this->numFacture;
    }

    public function setNumFacture(?string $numFacture): self
    {
        $this->numFacture = $numFacture;
        return $this;
    }

    public function getFraisPort(): ?string
    {
        return $this->fraisPort;
    }

    public function setFraisPort(?string $fraisPort): self
    {
        $this->fraisPort = $fraisPort;
        return $this;
    }

    public function getArticles(): array
    {
        return $this->articles;
    }

    public function addArticle(Article $article): self
    {
        $this->articles[] = $article;
        return $this;
    }
}
