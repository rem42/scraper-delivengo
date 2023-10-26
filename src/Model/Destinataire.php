<?php declare(strict_types=1);

namespace Scraper\ScraperDelivengo\Model;

class Destinataire
{
    public ?string $raisonSociale = null;
    public ?string $nom = null;
    public ?string $complementVoie = null;
    public ?string $voie = null;
    public ?string $boitePostale = null;
    public ?string $codePostalCommune = null;
    public ?string $pays = null;
}
