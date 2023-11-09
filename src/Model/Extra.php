<?php declare(strict_types=1);

namespace Scraper\ScraperDelivengo\Model;

class Extra
{
    private ?Module $module = null;
    private ?Compte $compte = null;

    public function getModule(): ?Module
    {
        return $this->module;
    }

    public function setModule(?Module $module): self
    {
        $this->module = $module;
        return $this;
    }

    public function getCompte(): ?Compte
    {
        return $this->compte;
    }

    public function setCompte(?Compte $compte): self
    {
        $this->compte = $compte;
        return $this;
    }
}
