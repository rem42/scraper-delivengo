<?php declare(strict_types=1);

namespace Scraper\ScraperDelivengo\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Factory\SerializerFactory;
use Scraper\Scraper\Request\RequestBody;
use Scraper\Scraper\Request\RequestQuery;
use Scraper\ScraperDelivengo\Model\Envoi;

#[Scraper(method: Method::POST, path: 'envois')]
class DelivengoEnvoiRequest extends DelivengoRequest implements RequestQuery, RequestBody
{
    private Envoi $envoi;

    public function __construct(
        string $apiKey,
        string $accept = null,
        private readonly ?int $support = null,
        private readonly ?int $position = null,
        private readonly ?int $imprimerReference = null,
        private readonly ?int $imprimerDescriptif = null,
    ) {
        parent::__construct($apiKey, $accept);
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

    public function setEnvoi(Envoi $envoi): self
    {
        $this->envoi = $envoi;
        return $this;
    }

    public function getBody()
    {
        return SerializerFactory::create()
            ->serialize($this->envoi, 'json')
        ;
    }
}
