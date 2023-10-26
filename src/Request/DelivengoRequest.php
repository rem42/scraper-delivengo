<?php

namespace Scraper\ScraperDelivengo\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scheme;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestHeaders;
use Scraper\Scraper\Request\ScraperRequest;

#[Scraper(method: Method::GET, scheme: Scheme::HTTPS, host: 'mydelivengo.laposte.fr', path: '/api/v{version}')]
abstract class DelivengoRequest extends ScraperRequest implements RequestHeaders {
    private string $version = '2.4';
    public function __construct(
        private readonly string $apiKey,
    ) {
    }

    public function getHeaders(): array
    {
        return [
            'API-Authorization' => $this->apiKey
        ];
    }

    public function getVersion(): string
    {
        return $this->version;
    }
}
