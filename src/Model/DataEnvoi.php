<?php declare(strict_types=1);

namespace Scraper\ScraperDelivengo\Model;

class DataEnvoi
{
    private ?int $idSupport = null;
    private ?string $descriptif = null;
    private ?Extra $extra = null;
    /** @var array<int, Pli> */
    private array $plis = [];

    public function getIdSupport(): ?int
    {
        return $this->idSupport;
    }

    public function setIdSupport(?int $idSupport): self
    {
        $this->idSupport = $idSupport;
        return $this;
    }

    public function getDescriptif(): ?string
    {
        return $this->descriptif;
    }

    public function setDescriptif(?string $descriptif): self
    {
        $this->descriptif = $descriptif;
        return $this;
    }

    public function getExtra(): ?Extra
    {
        return $this->extra;
    }

    public function setExtra(?Extra $extra): self
    {
        $this->extra = $extra;
        return $this;
    }

    public function getPlis(): array
    {
        return $this->plis;
    }

    public function addPli(Pli $pli): self
    {
        $this->plis[] = $pli;
        return $this;
    }
}
