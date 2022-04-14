<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement", indexes={@ORM\Index(name="id_equipement", columns={"id_equipement"}), @ORM\Index(name="id_transport", columns={"id_transport"}), @ORM\Index(name="id_avis", columns={"id_avis"}), @ORM\Index(name="id_hebergement", columns={"id_hebergement"}), @ORM\Index(name="id_user", columns={"id_user"})})
 * @ORM\Entity
 */
class Evenement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_Event", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_Event", type="string", length=255, nullable=false)
     */
    private $nomEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="date_debut", type="string", length=255, nullable=false)
     */
    private $dateDebut;

    /**
     * @var string
     *
     * @ORM\Column(name="date_fin", type="string", length=255, nullable=false)
     */
    private $dateFin;

    /**
     * @var int
     *
     * @ORM\Column(name="nbr_reservation", type="integer", nullable=false)
     */
    private $nbrReservation;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="activite", type="string", length=255, nullable=false)
     */
    private $activite;

    /**
     * @var \MoyenTransport
     *
     * @ORM\ManyToOne(targetEntity="MoyenTransport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_transport", referencedColumnName="id_transport")
     * })
     */
    private $idTransport;

    /**
     * @var \Avis
     *
     * @ORM\ManyToOne(targetEntity="Avis")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_avis", referencedColumnName="id_a")
     * })
     */
    private $idAvis;

    /**
     * @var \Hebergement
     *
     * @ORM\ManyToOne(targetEntity="Hebergement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_hebergement", referencedColumnName="id_h")
     * })
     */
    private $idHebergement;

    /**
     * @var \Utilisateurs
     *
     * @ORM\ManyToOne(targetEntity="Utilisateurs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;

    /**
     * @var \Equipement
     *
     * @ORM\ManyToOne(targetEntity="Equipement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_equipement", referencedColumnName="id")
     * })
     */
    private $idEquipement;

    public function getIdEvent(): ?int
    {
        return $this->idEvent;
    }

    public function getNomEvent(): ?string
    {
        return $this->nomEvent;
    }

    public function setNomEvent(string $nomEvent): self
    {
        $this->nomEvent = $nomEvent;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDateDebut(): ?string
    {
        return $this->dateDebut;
    }

    public function setDateDebut(string $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?string
    {
        return $this->dateFin;
    }

    public function setDateFin(string $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getNbrReservation(): ?int
    {
        return $this->nbrReservation;
    }

    public function setNbrReservation(int $nbrReservation): self
    {
        $this->nbrReservation = $nbrReservation;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getActivite(): ?string
    {
        return $this->activite;
    }

    public function setActivite(string $activite): self
    {
        $this->activite = $activite;

        return $this;
    }

    public function getIdTransport(): ?MoyenTransport
    {
        return $this->idTransport;
    }

    public function setIdTransport(?MoyenTransport $idTransport): self
    {
        $this->idTransport = $idTransport;

        return $this;
    }

    public function getIdAvis(): ?Avis
    {
        return $this->idAvis;
    }

    public function setIdAvis(?Avis $idAvis): self
    {
        $this->idAvis = $idAvis;

        return $this;
    }

    public function getIdHebergement(): ?Hebergement
    {
        return $this->idHebergement;
    }

    public function setIdHebergement(?Hebergement $idHebergement): self
    {
        $this->idHebergement = $idHebergement;

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

    public function getIdEquipement(): ?Equipement
    {
        return $this->idEquipement;
    }

    public function setIdEquipement(?Equipement $idEquipement): self
    {
        $this->idEquipement = $idEquipement;

        return $this;
    }


}
