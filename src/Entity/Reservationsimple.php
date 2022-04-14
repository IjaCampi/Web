<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservationsimple
 *
 * @ORM\Table(name="reservationsimple", indexes={@ORM\Index(name="id_h", columns={"id_h"})})
 * @ORM\Entity
 */
class Reservationsimple
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_rs", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRs;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="date", nullable=false)
     */
    private $datedebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="date", nullable=false)
     */
    private $datefin;

    /**
     * @var \Hebergement
     *
     * @ORM\ManyToOne(targetEntity="Hebergement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_h", referencedColumnName="id_h")
     * })
     */
    private $idH;

    public function getIdRs(): ?int
    {
        return $this->idRs;
    }

    public function getDatedebut(): ?\DateTimeInterface
    {
        return $this->datedebut;
    }

    public function setDatedebut(\DateTimeInterface $datedebut): self
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    public function getDatefin(): ?\DateTimeInterface
    {
        return $this->datefin;
    }

    public function setDatefin(\DateTimeInterface $datefin): self
    {
        $this->datefin = $datefin;

        return $this;
    }

    public function getIdH(): ?Hebergement
    {
        return $this->idH;
    }

    public function setIdH(?Hebergement $idH): self
    {
        $this->idH = $idH;

        return $this;
    }


}
