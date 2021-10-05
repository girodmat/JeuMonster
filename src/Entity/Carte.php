<?php

namespace App\Entity;

use App\Repository\CarteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CarteRepository::class)
 */
class Carte
{

    public const TERRAINS = [
        'terrain1.png',
        'terrain2.png',
        'terrain3.png',
        'terrain4.png',
        'terrain5.png',
        'terrain6.png',
        'terrain7png',
        'terrain8.png',
        'terrain9.png',
        'terrain10.png',
    ];


    public const CAMP_J1 = 'j1';
    public const CAMP_J2 = 'j2';
    public const CAMP_LEADER_J1 = 'lj2';
    public const CAMP_LEADER_J2 = 'lj2';

    public const PIERRE = 'pierre';
    public const FEUILLE = 'feuille';
    public const CISEAU = 'ciseau';

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $image;

    /**
     * @ORM\Column(type="integer")
     */
    private $poids;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $couleur;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $camp;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getPoids(): ?int
    {
        return $this->poids;
    }

    public function setPoids(int $poids): self
    {
        $this->poids = $poids;

        return $this;
    }

    public function getCouleur(): ?string
    {
        return $this->couleur;
    }

    public function setCouleur(string $couleur): self
    {
        $this->couleur = $couleur;

        return $this;
    }

    public function getCamp(): ?string
    {
        return $this->camp;
    }

    public function setCamp(string $camp): self
    {
        $this->camp = $camp;

        return $this;
    }
}
