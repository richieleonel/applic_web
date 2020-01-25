<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CoursRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Cours
{
    use TimeStampTrait;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nom;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Fichier", mappedBy="cours")
     */
    private $fichier;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Commentaires", mappedBy="cours")
     */
    private $commentaires;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Filiere", mappedBy="cours")
     */
    private $filieres;




    public function __construct()
    {
        $this->fichier = new ArrayCollection();
        $this->commentaires = new ArrayCollection();
        $this->filieres = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection|Fichier[]
     */
    public function getFichier(): Collection
    {
        return $this->fichier;
    }

    public function addFichier(Fichier $fichier): self
    {
        if (!$this->fichier->contains($fichier)) {
            $this->fichier[] = $fichier;
            $fichier->setCours($this);
        }

        return $this;
    }

    public function removeFichier(Fichier $fichier): self
    {
        if ($this->fichier->contains($fichier)) {
            $this->fichier->removeElement($fichier);
            // set the owning side to null (unless already changed)
            if ($fichier->getCours() === $this) {
                $fichier->setCours(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Commentaires[]
     */
    public function getCommentaires(): Collection
    {
        return $this->commentaires;
    }

    public function addCommentaire(Commentaires $commentaire): self
    {
        if (!$this->commentaires->contains($commentaire)) {
            $this->commentaires[] = $commentaire;
            $commentaire->setCours($this);
        }

        return $this;
    }

    public function removeCommentaire(Commentaires $commentaire): self
    {
        if ($this->commentaires->contains($commentaire)) {
            $this->commentaires->removeElement($commentaire);
            // set the owning side to null (unless already changed)
            if ($commentaire->getCours() === $this) {
                $commentaire->setCours(null);
            }
        }

        return $this;
    }



    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->nom;
    }

    /**
     * @return Collection|Filiere[]
     */
    public function getFilieres(): Collection
    {
        return $this->filieres;
    }

    public function addFiliere(Filiere $filiere): self
    {
        if (!$this->filieres->contains($filiere)) {
            $this->filieres[] = $filiere;
            $filiere->addCour($this);
        }

        return $this;
    }

    public function removeFiliere(Filiere $filiere): self
    {
        if ($this->filieres->contains($filiere)) {
            $this->filieres->removeElement($filiere);
            $filiere->removeCour($this);
        }

        return $this;
    }



}
