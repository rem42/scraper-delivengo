<?php declare(strict_types=1);

namespace Scraper\ScraperDelivengo\Model;

class Destinataire extends Expediteur
{
    private ?string $pays = null;

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(?string $pays): self
    {
        $this->pays = $pays;
        return $this;
    }
}
