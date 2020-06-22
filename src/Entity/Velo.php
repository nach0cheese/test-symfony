<?php

namespace App\Entity;

use App\Repository\VeloRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VeloRepository::class)
 */
class Velo
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $marque;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $stylevelo;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $annee;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $etat;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $prix;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbvitesse;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $typefrein;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $modele;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    public function getStylevelo(): ?string
    {
        return $this->stylevelo;
    }

    public function setStylevelo(string $stylevelo): self
    {
        $this->stylevelo = $stylevelo;

        return $this;
    }

    public function getAnnee(): ?int
    {
        return $this->annee;
    }

    public function setAnnee(?int $annee): self
    {
        $this->annee = $annee;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(?string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(?float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getNbvitesse(): ?int
    {
        return $this->nbvitesse;
    }

    public function setNbvitesse(?int $nbvitesse): self
    {
        $this->nbvitesse = $nbvitesse;

        return $this;
    }

    public function getTypefrein(): ?string
    {
        return $this->typefrein;
    }

    public function setTypefrein(?string $typefrein): self
    {
        $this->typefrein = $typefrein;

        return $this;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(string $modele): self
    {
        $this->modele = $modele;

        return $this;
    }
}
