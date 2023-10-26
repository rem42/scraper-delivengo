<?php declare(strict_types=1);

namespace Scraper\ScraperDelivengo\Model;

class DataEnvoi
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
