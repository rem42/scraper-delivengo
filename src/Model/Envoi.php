<?php declare(strict_types=1);

namespace Scraper\ScraperDelivengo\Model;

class Envoi
{
    private ?DataEnvoi $data = null;

    public function getData(): ?DataEnvoi
    {
        return $this->data;
    }

    public function setData(?DataEnvoi $data): self
    {
        $this->data = $data;
        return $this;
    }
}
