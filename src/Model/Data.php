<?php

namespace Scraper\ScraperDelivengo\Model;

class Data
{
    public ?int $idSupport = null;
    public ?string $descriptif = null;
    public ?Extra $extra = null;
    /** @var array<int, Pli> */
    public array $plis = [];

    public function addPli(Pli $pli): self
    {
        $this->plis[] = $pli;
        return $this;
    }
}
