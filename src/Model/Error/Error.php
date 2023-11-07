<?php declare(strict_types=1);

namespace Scraper\ScraperDelivengo\Model\Error;

class Error
{
    public ?int $code = null;
    public ?string $message = null;
    public ?string $description = null;
    public ?Detail $details = null;
}
