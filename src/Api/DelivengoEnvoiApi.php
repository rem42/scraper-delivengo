<?php declare(strict_types=1);

namespace Scraper\ScraperDelivengo\Api;

use Scraper\ScraperDelivengo\Model\EnvoiResponse;

class DelivengoEnvoiApi extends DelivengoApi
{
    public function execute(): array|bool|object|string
    {
        return $this->serializer->deserialize(
            $this->response->getContent(),
            EnvoiResponse::class,
            'json'
        );
    }
}
