<?php declare(strict_types=1);

namespace Scraper\ScraperDelivengo\Model;

class Pli
{
    private ?Expediteur $expediteur = null;
    private ?Destinataire $destinataire = null;
    private ?string $expediteurEmail = null;
    private ?string $expediteurTelephone = null;
    private ?string $destinataireEmail = null;
    private ?string $destinataireTelephone = null;
    private ?string $reference = null;
    private ?int $options = null;
    private ?int $poids = null;
    private ?DocumentsDouanier $documentsDouaniers = null;

    public function getExpediteur(): ?Expediteur
    {
        return $this->expediteur;
    }

    public function setExpediteur(?Expediteur $expediteur): self
    {
        $this->expediteur = $expediteur;
        return $this;
    }

    public function getDestinataire(): ?Destinataire
    {
        return $this->destinataire;
    }

    public function setDestinataire(?Destinataire $destinataire): self
    {
        $this->destinataire = $destinataire;
        return $this;
    }

    public function getExpediteurEmail(): ?string
    {
        return $this->expediteurEmail;
    }

    public function setExpediteurEmail(?string $expediteurEmail): self
    {
        $this->expediteurEmail = $expediteurEmail;
        return $this;
    }

    public function getExpediteurTelephone(): ?string
    {
        return $this->expediteurTelephone;
    }

    public function setExpediteurTelephone(?string $expediteurTelephone): self
    {
        $this->expediteurTelephone = $expediteurTelephone;
        return $this;
    }

    public function getDestinataireEmail(): ?string
    {
        return $this->destinataireEmail;
    }

    public function setDestinataireEmail(?string $destinataireEmail): self
    {
        $this->destinataireEmail = $destinataireEmail;
        return $this;
    }

    public function getDestinataireTelephone(): ?string
    {
        return $this->destinataireTelephone;
    }

    public function setDestinataireTelephone(?string $destinataireTelephone): self
    {
        $this->destinataireTelephone = $destinataireTelephone;
        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): self
    {
        $this->reference = $reference;
        return $this;
    }

    public function getOptions(): ?int
    {
        return $this->options;
    }

    public function setOptions(?int $options): self
    {
        $this->options = $options;
        return $this;
    }

    public function getPoids(): ?int
    {
        return $this->poids;
    }

    public function setPoids(?int $poids): self
    {
        $this->poids = $poids;
        return $this;
    }

    public function getDocumentsDouaniers(): ?DocumentsDouanier
    {
        return $this->documentsDouaniers;
    }

    public function setDocumentsDouaniers(?DocumentsDouanier $documentsDouaniers): self
    {
        $this->documentsDouaniers = $documentsDouaniers;
        return $this;
    }
}
