<?php declare(strict_types=1);

namespace Scraper\ScraperDelivengo\Model;

class Extra
{
    private ?Module $module = null;

    public function getModule(): ?Module
    {
        return $this->module;
    }

    public function setModule(?Module $module): self
    {
        $this->module = $module;
        return $this;
    }
}
