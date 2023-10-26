<?php declare(strict_types=1);

namespace Scraper\ScraperDelivengo\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scheme;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestHeaders;
use Scraper\Scraper\Request\ScraperRequest;

#[Scraper(method: Method::GET, scheme: Scheme::HTTPS, host: 'mydelivengo.laposte.fr', path: '/api/v{version}')]
abstract class DelivengoRequest extends ScraperRequest implements RequestHeaders
{
    public const ACCEPT_PDF = 'application/pdf';
    public const ACCEPT_ZPL = 'application/zpl';

    private string $version = '2.4';
    private bool $simulate = false;

    public function __construct(
        private readonly string $apiKey,
        private readonly ?string $accept = null
    ) {}

    public function getHeaders(): array
    {
        $headers = [
            'API-Authorization' => $this->apiKey,
        ];

        if ($this->simulate) {
            $headers['api-creation-mode'] = 'simulation';
        }

        if ($this->accept) {
            $headers['Accept'] = $this->accept;
        }

        return $headers;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function setSimulate(bool $simulate): self
    {
        $this->simulate = $simulate;
        return $this;
    }
}
