<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParticipementEvent
 *
 * @ORM\Table(name="participement_event", indexes={@ORM\Index(name="id_user", columns={"id_user"}), @ORM\Index(name="id_Event", columns={"id_Event"})})
 * @ORM\Entity
 */
class ParticipementEvent
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_participement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idParticipement;

    /**
     * @var int
     *
     * @ORM\Column(name="nbr_participement", type="integer", nullable=false)
     */
    private $nbrParticipement;

    /**
     * @var \Evenement
     *
     * @ORM\ManyToOne(targetEntity="Evenement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Event", referencedColumnName="id_Event")
     * })
     */
    private $idEvent;

    /**
     * @var \Utilisateurs
     *
     * @ORM\ManyToOne(targetEntity="Utilisateurs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;

    public function getIdParticipement(): ?int
    {
        return $this->idParticipement;
    }

    public function getNbrParticipement(): ?int
    {
        return $this->nbrParticipement;
    }

    public function setNbrParticipement(int $nbrParticipement): self
    {
        $this->nbrParticipement = $nbrParticipement;

        return $this;
    }

    public function getIdEvent(): ?Evenement
    {
        return $this->idEvent;
    }

    public function setIdEvent(?Evenement $idEvent): self
    {
        $this->idEvent = $idEvent;

        return $this;
    }

    public function getIdUser(): ?Utilisateurs
    {
        return $this->idUser;
    }

    public function setIdUser(?Utilisateurs $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }


}