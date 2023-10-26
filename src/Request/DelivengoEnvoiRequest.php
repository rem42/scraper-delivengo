<?php

namespace Scraper\ScraperDelivengo\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestQuery;

#[Scraper(method: Method::POST, path: 'envois')]
class DelivengoEnvoiRequest extends DelivengoRequest implements RequestQuery
{

    public function __construct(
        string                $apiKey,
        private readonly ?int          $support = null,
        private readonly ?int          $position = null,
        private readonly ?int $imprimerReference = null,
        private readonly ?int          $imprimerDescriptif = null,
    )
    {
        parent::__construct($apiKey);
    }

    public function getQuery(): array
    {
        return array_filter([
            'support' => $this->support,
            'position' => $this->position,
            'imprimer_reference' => $this->imprimerReference,
            'imprimer_descriptif' => $this->imprimerDescriptif,
        ]);
    }
}
