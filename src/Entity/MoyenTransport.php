<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * MoyenTransport
 *
 * @ORM\Table(name="moyen_transport", uniqueConstraints={@ORM\UniqueConstraint(name="matricule", columns={"matricule"})})
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

    /**
     * @var String
     * @Assert\NotBlank(message=" Type doit etre non vide")
     * @Assert\Length(
     *      min = 5,
     *      minMessage=" Entrer un type au mini de 5 caracteres"
     *
     *     )
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @var String
     * @Assert\NotBlank(message=" Matricule doit etre non vide")
     * @ORM\Column(type="string", length=255)
     */
    private $matricule;

    /**
     * @var String
     * @Assert\NotBlank(message=" Marque doit etre non vide")
     * @ORM\Column(type="string", length=255)
     */
    private $marque;

    /**
     * @var int
     * @Assert\NotBlank(message=" Nombre de Places doit etre non vide")
     * @ORM\Column(type="integer")
     */
    private $nbrPlace;

    /**
     * @var float
     * @Assert\NotBlank(message=" Frais doit etre non vide")
     * @ORM\Column(type="float")
     */
    private $frais;

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


}
