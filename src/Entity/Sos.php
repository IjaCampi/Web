<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sos
 *
 * @ORM\Table(name="sos")
 * @ORM\Entity
 */
class Sos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_c", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idC;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50, nullable=false)
     */
    private $prenom;

    /**
     * @var int
     *
     * @ORM\Column(name="telephone", type="integer", nullable=false)
     */
    private $telephone;

    /**
     * @var int
     *
     * @ORM\Column(name="id_g", type="integer", nullable=false)
     */
    private $idG;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_cas", type="string", length=50, nullable=false)
     */
    private $descCas;

    public function getIdC(): ?int
    {
        return $this->idC;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getIdG(): ?int
    {
        return $this->idG;
    }

    public function setIdG(int $idG): self
    {
        $this->idG = $idG;

        return $this;
    }

    public function getDescCas(): ?string
    {
        return $this->descCas;
    }

    public function setDescCas(string $descCas): self
    {
        $this->descCas = $descCas;

        return $this;
    }


}
