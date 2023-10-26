<?php

namespace Scraper\ScraperDelivengo\Model;

class DataEnvoiResponse
{
    public ?int $id = null;
    /** @var array<int, PliEnvoiResponse> */
    public array $plis = [];
    public ?string $documentsSupports = null;
    public ?string $documentsDouaniers = null;

    public function addPli(PliEnvoiResponse $pli): self
    {
        $this->plis[] = $pli;
        return $this;
    }
}
