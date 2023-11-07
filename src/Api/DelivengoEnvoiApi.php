<?php declare(strict_types=1);

namespace Scraper\ScraperDelivengo\Api;

use Scraper\ScraperDelivengo\Model\EnvoiResponse;
use Scraper\ScraperDelivengo\Model\Error\ErrorResponse;

class DelivengoEnvoiApi extends DelivengoApi
{
    public function execute(): array|bool|object|string
    {
        if ($this->response->getStatusCode() >= 200 && $this->response->getStatusCode() < 300) {
            return $this->serializer->deserialize(
                $this->response->getContent(),
                EnvoiResponse::class,
                'json'
            );
        }

        return $this->serializer->deserialize(
            $this->response->getContent(false),
            ErrorResponse::class,
            'json'
        );
    }
}
