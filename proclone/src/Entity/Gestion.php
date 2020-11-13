<?php

namespace App\Entity;

use App\Repository\GestionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GestionRepository::class)
 */
class Gestion
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $presomme;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $deuxnom;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $deuxsomme;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $troisnom;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $troissomme;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $quanom;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quasomme;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cinqnom;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $cinqsomme;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sixnom;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $sixsomme;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbparticipant;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titre;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getPresomme(): ?int
    {
        return $this->presomme;
    }

    public function setPresomme(?int $presomme): self
    {
        $this->presomme = $presomme;

        return $this;
    }

    public function getDeuxnom(): ?string
    {
        return $this->deuxnom;
    }

    public function setDeuxnom(?string $deuxnom): self
    {
        $this->deuxnom = $deuxnom;

        return $this;
    }

    public function getDeuxsomme(): ?int
    {
        return $this->deuxsomme;
    }

    public function setDeuxsomme(?int $deuxsomme): self
    {
        $this->deuxsomme = $deuxsomme;

        return $this;
    }

    public function getTroisnom(): ?string
    {
        return $this->troisnom;
    }

    public function setTroisnom(?string $troisnom): self
    {
        $this->troisnom = $troisnom;

        return $this;
    }

    public function getTroissomme(): ?int
    {
        return $this->troissomme;
    }

    public function setTroissomme(?int $troissomme): self
    {
        $this->troissomme = $troissomme;

        return $this;
    }

    public function getQuanom(): ?string
    {
        return $this->quanom;
    }

    public function setQuanom(?string $quanom): self
    {
        $this->quanom = $quanom;

        return $this;
    }

    public function getQuasomme(): ?int
    {
        return $this->quasomme;
    }

    public function setQuasomme(?int $quasomme): self
    {
        $this->quasomme = $quasomme;

        return $this;
    }

    public function getCinqnom(): ?string
    {
        return $this->cinqnom;
    }

    public function setCinqnom(?string $cinqnom): self
    {
        $this->cinqnom = $cinqnom;

        return $this;
    }

    public function getCinqsomme(): ?int
    {
        return $this->cinqsomme;
    }

    public function setCinqsomme(?int $cinqsomme): self
    {
        $this->cinqsomme = $cinqsomme;

        return $this;
    }

    public function getSixnom(): ?string
    {
        return $this->sixnom;
    }

    public function setSixnom(?string $sixnom): self
    {
        $this->sixnom = $sixnom;

        return $this;
    }

    public function getSixsomme(): ?int
    {
        return $this->sixsomme;
    }

    public function setSixsomme(?int $sixsomme): self
    {
        $this->sixsomme = $sixsomme;

        return $this;
    }

    public function getNbparticipant(): ?int
    {
        return $this->nbparticipant;
    }

    public function setNbparticipant(?int $nbparticipant): self
    {
        $this->nbparticipant = $nbparticipant;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }
}
