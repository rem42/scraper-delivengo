<?php

namespace Scraper\ScraperDelivengo\Model;

class Pli
{
    public ?Expediteur $expediteur = null;
    public ?Destinataire $destinataire = null;
    public ?string $expediteurTelephone = null;
    public ?string $destinataireEmail = null;
    public ?string $destinataireTelephone = null;
    public ?string $reference = null;
    public ?int $options = null;
    public ?int $poids = null;
    public ?DocumentsDouanier $documentsDouaniers = null;
}
