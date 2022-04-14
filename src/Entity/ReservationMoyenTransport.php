<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReservationMoyenTransport
 *
 * @ORM\Table(name="reservation_moyen_transport")
 * @ORM\Entity
 */
class ReservationMoyenTransport
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_reservation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReservation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_transport", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idTransport = NULL;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date", nullable=false)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date", nullable=false)
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="place", type="string", length=100, nullable=false)
     */
    private $place;

    public function getIdReservation(): ?int
    {
        return $this->idReservation;
    }

    public function getIdTransport(): ?int
    {
        return $this->idTransport;
    }

    public function setIdTransport(?int $idTransport): self
    {
        $this->idTransport = $idTransport;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getPlace(): ?string
    {
        return $this->place;
    }

    public function setPlace(string $place): self
    {
        $this->place = $place;

        return $this;
    }


}
