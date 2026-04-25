<?php
// src/Entity/ReturnOrder.php

namespace App\Entity;

use App\Repository\ReturnOrderRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReturnOrderRepository::class)]
#[ORM\Table(name: 'return_order')]
class ReturnOrder
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, unique: true)]
    private ?string $return_number = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Order $original_order = null;

    #[ORM\Column(length: 50)]
    private ?string $order_number = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $customer_name = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $customer_phone = null;

    #[ORM\ManyToOne(targetEntity: User::class, cascade: ['persist'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $returned_by = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: true)]
    private ?User $approved_by = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: true)]
    private ?User $completed_by = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $approved_at = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $completed_at = null;

    #[ORM\Column]
    private ?\DateTime $return_date = null;

    #[ORM\Column(length: 50)]
    private ?string $status = 'pending'; // pending, approved, rejected, completed

    #[ORM\Column(length: 50)]
    private ?string $reason = null; // product_defective, wrong_product, customer_cancellation, quality_issue, other

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $reason_notes = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $total_refund_amount = '0';

    #[ORM\Column(length: 50)]
    private ?string $refund_method = null; // cash, bank_transfer, wallet, credit_note

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $notes = null;

    #[ORM\Column]
    private ?\DateTime $created_at = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $updated_at = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?HmaService $hma_service = null;

    /**
     * @var Collection<int, ReturnItem>
     */
    #[ORM\OneToMany(targetEntity: ReturnItem::class, mappedBy: 'return_order', orphanRemoval: true, cascade: ['persist'])]
    private Collection $returnItems;

    public function __construct()
    {
        $this->returnItems = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReturnNumber(): ?string
    {
        return $this->return_number;
    }

    public function setReturnNumber(string $return_number): static
    {
        $this->return_number = $return_number;
        return $this;
    }

    public function getOriginalOrder(): ?Order
    {
        return $this->original_order;
    }

    public function setOriginalOrder(?Order $original_order): static
    {
        $this->original_order = $original_order;
        return $this;
    }

    public function getOrderNumber(): ?string
    {
        return $this->order_number;
    }

    public function setOrderNumber(string $order_number): static
    {
        $this->order_number = $order_number;
        return $this;
    }

    public function getCustomerName(): ?string
    {
        return $this->customer_name;
    }

    public function setCustomerName(?string $customer_name): static
    {
        $this->customer_name = $customer_name;
        return $this;
    }

    public function getCustomerPhone(): ?string
    {
        return $this->customer_phone;
    }

    public function setCustomerPhone(?string $customer_phone): static
    {
        $this->customer_phone = $customer_phone;
        return $this;
    }

    public function getReturnedBy(): ?User
    {
        return $this->returned_by;
    }

    public function setReturnedBy(?User $returned_by): static
    {
        $this->returned_by = $returned_by;
        return $this;
    }

        public function getApprovedBy(): ?User
    {
        return $this->approved_by;
    }

    public function setApprovedBy(?User $approved_by): static
    {
        $this->approved_by = $approved_by;
        return $this;
    }

    public function getCompletedBy(): ?User
    {
        return $this->completed_by;
    }

    public function setCompletedBy(?User $completed_by): static
    {
        $this->completed_by = $completed_by;
        return $this;
    }

    public function getApprovedAt(): ?\DateTime
    {
        return $this->approved_at;
    }

    public function setApprovedAt(?\DateTime $approved_at): static
    {
        $this->approved_at = $approved_at;
        return $this;
    }

    public function getCompletedAt(): ?\DateTime
    {
        return $this->completed_at;
    }

    public function setCompletedAt(?\DateTime $completed_at): static
    {
        $this->completed_at = $completed_at;
        return $this;
    }

    public function getReturnDate(): ?\DateTime
    {
        return $this->return_date;
    }

    public function setReturnDate(\DateTime $return_date): static
    {
        $this->return_date = $return_date;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;
        return $this;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(string $reason): static
    {
        $this->reason = $reason;
        return $this;
    }

    public function getReasonNotes(): ?string
    {
        return $this->reason_notes;
    }

    public function setReasonNotes(?string $reason_notes): static
    {
        $this->reason_notes = $reason_notes;
        return $this;
    }

    public function getTotalRefundAmount(): ?string
    {
        return $this->total_refund_amount;
    }

    public function setTotalRefundAmount(string $total_refund_amount): static
    {
        $this->total_refund_amount = $total_refund_amount;
        return $this;
    }

    public function getRefundMethod(): ?string
    {
        return $this->refund_method;
    }

    public function setRefundMethod(string $refund_method): static
    {
        $this->refund_method = $refund_method;
        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): static
    {
        $this->notes = $notes;
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

    public function setUpdatedAt(?\DateTime $updated_at): static
    {
        $this->updated_at = $updated_at;
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
     * @return Collection<int, ReturnItem>
     */
    public function getReturnItems(): Collection
    {
        return $this->returnItems;
    }

    public function addReturnItem(ReturnItem $returnItem): static
    {
        if (!$this->returnItems->contains($returnItem)) {
            $this->returnItems->add($returnItem);
            $returnItem->setReturnOrder($this);
        }
        return $this;
    }

    public function removeReturnItem(ReturnItem $returnItem): static
    {
        if ($this->returnItems->removeElement($returnItem)) {
            if ($returnItem->getReturnOrder() === $this) {
                $returnItem->setReturnOrder(null);
            }
        }
        return $this;
    }
}