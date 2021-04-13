<?php

namespace App\Entity;

use App\Repository\MatiereRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=MatiereRepository::class)
 */
class Matiere
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * 
     * 
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity=Chute::class, mappedBy="matiere")
     */
    private $chutes;

    public function __construct()
    {
        $this->chutes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|Chute[]
     */
    public function getChutes(): Collection
    {
        return $this->chutes;
    }

    public function addChute(Chute $chute): self
    {
        if (!$this->chutes->contains($chute)) {
            $this->chutes[] = $chute;
            $chute->setMatiere($this);
        }

        return $this;
    }

    public function removeChute(Chute $chute): self
    {
        if ($this->chutes->removeElement($chute)) {
            // set the owning side to null (unless already changed)
            if ($chute->getMatiere() === $this) {
                $chute->setMatiere(null);
            }
        }

        return $this;
    }
}
