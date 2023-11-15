<?php declare(strict_types=1);

namespace Scraper\ScraperDelivengo\Model;

class Destinataire extends Expediteur
{
    private ?string $pays = null;
    private ?string $codePays = null;

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(?string $pays): self
    {
        $this->pays = $pays;
        return $this;
    }

    public function getCodePays(): ?string
    {
        return $this->codePays;
    }

    public function setCodePays(?string $codePays): self
    {
        $this->codePays = $codePays;
        return $this;
    }
}
