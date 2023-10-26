<?php declare(strict_types=1);

namespace Scraper\ScraperDelivengo\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestBody;
use Scraper\Scraper\Request\RequestQuery;
use Scraper\ScraperColissimo\Factory\SerializerFactory;
use Scraper\ScraperDelivengo\Model\DataEnvoi;

#[Scraper(method: Method::POST, path: 'envois')]
class DelivengoEnvoiRequest extends DelivengoRequest implements RequestQuery, RequestBody
{
    private DataEnvoi $dataEnvoi;

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

    public function setDataEnvoi(DataEnvoi $dataEnvoi): self
    {
        $this->dataEnvoi = $dataEnvoi;
        return $this;
    }

    public function getBody()
    {
        return SerializerFactory::create()
            ->serialize($this->dataEnvoi, 'json')
        ;
    }
}
