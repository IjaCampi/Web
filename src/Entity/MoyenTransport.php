<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * MoyenTransport
 *
 * @ORM\Table(name="moyen_transport", indexes={@ORM\Index(name="id_user", columns={"id_user"}), @ORM\Index(name="id_user_2", columns={"id_user"})})
 * @ORM\Entity
 */
class MoyenTransport
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_transport", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTransport;
    public function __toString() {
        return strval($this->idTransport);
    }

    /**
     * @var string
     * @Assert\NotBlank(message="Type doit être non vide")
     * @ORM\Column(name="type", type="string", length=100, nullable=false)
     */
    private $type;

    /**
     * @var string
     * @Assert\NotBlank(message="Matricule doit être non vide")
     * @ORM\Column(name="matricule", type="string", length=100, nullable=false)
     */
    private $matricule;

    /**
     * @var string
     * @Assert\NotBlank(message="Marque doit être non vide")
     * @ORM\Column(name="marque", type="string", length=100, nullable=false)
     */
    private $marque;

    /**
     * @var int
     * @Assert\NotBlank(message="Nombre de Places doit être non vide")
     * @ORM\Column(name="nbr_place", type="integer", nullable=false)
     */
    private $nbrPlace;

    /**
     * @var float
     * @Assert\NotBlank(message="Frais doit être non vide")
     * @ORM\Column(name="frais", type="float", precision=10, scale=0, nullable=false)
     */
    private $frais;

    /**
     * @var \Utilisateurs
     *
     * @ORM\ManyToOne(targetEntity="Utilisateurs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;

    public function getIdTransport(): ?int
    {
        return $this->idTransport;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
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

    public function getNbrPlace(): ?int
    {
        return $this->nbrPlace;
    }

    public function setNbrPlace(int $nbrPlace): self
    {
        $this->nbrPlace = $nbrPlace;

        return $this;
    }

    public function getFrais(): ?float
    {
        return $this->frais;
    }

    public function setFrais(float $frais): self
    {
        $this->frais = $frais;

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
