<?php declare(strict_types=1);

namespace Scraper\ScraperDelivengo\Model;

class DocumentsDouanier
{
    /** @var array<int, int> */
    public array $envoiNature = [];
    public ?int $envoiCommercial = null;
    public ?string $observation = null;
    public ?string $numLicence = null;
    public ?string $numCertificat = null;
    public ?string $numFacture = null;
    public ?string $fraisPort = null;
    /** @var array<int, Article> */
    public array $articles = [];

    public function addEnvoiNature(int $envoiNature): self
    {
        $this->envoiNature[] = $envoiNature;
        return $this;
    }

    public function addArticle(Article $article): self
    {
        $this->articles[] = $article;
        return $this;
    }
}
