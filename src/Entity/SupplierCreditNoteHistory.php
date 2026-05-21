<?php
// src/Entity/SupplierCreditNoteHistory.php

namespace App\Entity;

use App\Repository\SupplierCreditNoteHistoryRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SupplierCreditNoteHistoryRepository::class)]
#[ORM\Table(name: 'supplier_credit_note_history')]
class SupplierCreditNoteHistory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?SupplierCreditNote $creditNote = null;

    #[ORM\Column(length: 50)]
    private ?string $action = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $old_value = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $new_value = null;

    // 🔥 CHANGEMENT: nullable: true pour permettre les réponses fournisseur
    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: true)]
    private ?User $performed_by = null;

    // 🔥 AJOUT: champ pour stocker le nom quand c'est le fournisseur qui agit
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $performed_by_name = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $performed_at = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $notes = null;

    public function getId(): ?int { return $this->id; }

    public function getCreditNote(): ?SupplierCreditNote { return $this->creditNote; }
    public function setCreditNote(?SupplierCreditNote $creditNote): static
    {
        $this->creditNote = $creditNote;
        return $this;
    }

    public function getAction(): ?string { return $this->action; }
    public function setAction(string $action): static
    {
        $this->action = $action;
        return $this;
    }

    public function getOldValue(): ?string { return $this->old_value; }
    public function setOldValue(?string $old_value): static
    {
        $this->old_value = $old_value;
        return $this;
    }

    public function getNewValue(): ?string { return $this->new_value; }
    public function setNewValue(?string $new_value): static
    {
        $this->new_value = $new_value;
        return $this;
    }

    public function getPerformedBy(): ?User { return $this->performed_by; }
    public function setPerformedBy(?User $performed_by): static
    {
        $this->performed_by = $performed_by;
        return $this;
    }

    public function getPerformedByName(): ?string
    {
        return $this->performed_by_name;
    }

    public function setPerformedByName(?string $performed_by_name): static
    {
        $this->performed_by_name = $performed_by_name;
        return $this;
    }

    public function getPerformedAt(): ?\DateTimeImmutable { return $this->performed_at; }
    public function setPerformedAt(\DateTimeImmutable $performed_at): static
    {
        $this->performed_at = $performed_at;
        return $this;
    }

    public function getNotes(): ?string { return $this->notes; }
    public function setNotes(?string $notes): static
    {
        $this->notes = $notes;
        return $this;
    }
    
    // 🔥 Méthode utilitaire pour afficher qui a fait l'action
    public function getPerformedByDisplay(): string
    {
        if ($this->performed_by) {
            return $this->performed_by->getFullName() ?: $this->performed_by->getUserIdentifier();
        }
        if ($this->performed_by_name) {
            return $this->performed_by_name;
        }
        return 'Système';
    }
}