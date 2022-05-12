<?php

namespace App\Serializer;

use App\Entity\Equipement;
use Symfony\Component\Serializer\Normalizer\ContextAwareNormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class EquipementNormalizer implements ContextAwareNormalizerInterface
{
    private $normalizer;

    public function __construct(ObjectNormalizer $normalizer)
    {
        $this->normalizer = $normalizer;
    }

    public function normalize($equipement,  $format = null, array $context = [])
    {

      //  $data = $this->normalizer->normalize($equipement,  $format, $context);
        $data = [
            'id' => $equipement->getId(),
            'nom' => $equipement->getNom(),
            'description' => $equipement->getDescription(),
            'prix' => $equipement->getPrix(),
            'marque' => $equipement->getMarque(),
            'categorie' => $equipement->getCategorie(),

            //Customize to your needs
        ];
        return $data;
    }

    public function supportsNormalization($data,  $format = null, array $context = [])
    {
        return $data instanceof Equipement;
    }
}