<?php declare(strict_types=1);

namespace Scraper\ScraperDelivengo\Model;

class Compte
{
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }
}
