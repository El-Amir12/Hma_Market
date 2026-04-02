<?php

namespace App\Entity;

use App\Repository\SupplierRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SupplierRepository::class)]
class Supplier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $name = null;

    #[ORM\Column(length: 50)]
    private ?string $contact_person = null;

    #[ORM\Column(length: 20)]
    private ?string $phone = null;

    #[ORM\Column(length: 100)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $adress = null;

    #[ORM\Column]
    private ?bool $is_active = null;

    #[ORM\Column]
    private ?\DateTime $created_at = null;

    #[ORM\Column]
    private ?\DateTime $updated_at = null;

    #[ORM\Column(type: 'boolean', options: ['default' => true])]
    private bool $subscription_active = true;

    /**
     * @var Collection<int, Purchase>
     */
    #[ORM\OneToMany(targetEntity: Purchase::class, mappedBy: 'supplier')]
    private Collection $purchases;

    #[ORM\ManyToOne(inversedBy: 'suppliers')]
    #[ORM\JoinColumn(nullable: false)]
    private ?HmaService $hma_service = null;

    public function __construct()
    {
        $this->purchases = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getContactPerson(): ?string
    {
        return $this->contact_person;
    }

    public function setContactPerson(string $contact_person): static
    {
        $this->contact_person = $contact_person;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): static
    {
        $this->phone = $phone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): static
    {
        $this->adress = $adress;

        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->is_active;
    }

    public function setIsActive(bool $is_active): static
    {
        $this->is_active = $is_active;

        return $this;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTime $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTime $updated_at): static
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    public function isSubscriptionActive(): bool
    {
        return $this->subscription_active;
    }

    public function setSubscriptionActive(bool $subscription_active): self
    {
        $this->subscription_active = $subscription_active;
        return $this;
    }

    /**
     * @return Collection<int, Purchase>
     */
    public function getPurchases(): Collection
    {
        return $this->purchases;
    }

    public function addPurchase(Purchase $purchase): static
    {
        if (!$this->purchases->contains($purchase)) {
            $this->purchases->add($purchase);
            $purchase->setSupplier($this);
        }

        return $this;
    }

    public function removePurchase(Purchase $purchase): static
    {
        if ($this->purchases->removeElement($purchase)) {
            // set the owning side to null (unless already changed)
            if ($purchase->getSupplier() === $this) {
                $purchase->setSupplier(null);
            }
        }

        return $this;
    }

    public function getHmaService(): ?HmaService  
    {
        return $this->hma_service;
    }

    public function setHmaService(?HmaService $hma_service): static  
    {
        $this->hma_service = $hma_service;
        return $this;
    }

    /**
     * Alias pour getName()
     */
    public function getCompanyName(): ?string
    {
        return $this->getName();
    }
}
