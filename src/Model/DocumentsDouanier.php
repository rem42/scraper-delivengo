<?php declare(strict_types=1);

namespace Scraper\ScraperDelivengo\Model;

class DocumentsDouanier
{
    public const GIFT = 1;
    public const DOCUMENT = 2;
    public const COMMERCIAL_SAMPLE = 3;
    public const MERCHANDISE_RETURN = 4;
    public const OTHER = 5;
    public const COMMERCIAL = 6;

    /** @var array<int, int> */
    private array $envoiNature = [];
    private ?int $envoiCommercial = null;
    private ?string $observation = null;
    private ?string $numLicence = null;
    private ?string $numCertificat = null;
    private ?string $numFacture = null;
    private ?float $fraisPort = null;
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

    public function getFraisPort(): ?float
    {
        return $this->fraisPort;
    }

    public function setFraisPort(?float $fraisPort): self
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
