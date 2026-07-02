<?php
// src/Entity/Message.php

namespace App\Entity;

use App\Repository\MessageRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MessageRepository::class)]
#[ORM\Table(name: 'message')]
#[ORM\HasLifecycleCallbacks]
class Message
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Customer $sender = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Customer $recipient = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $content = null;

    #[ORM\Column]
    private ?bool $is_read = false;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $read_at = null;

    #[ORM\Column(nullable: true)]
    private ?int $conversation = null;

    public function __construct()
    {
        $this->created_at = new \DateTimeImmutable();
        $this->is_read = false;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSender(): ?Customer
    {
        return $this->sender;
    }

    public function setSender(?Customer $sender): static
    {
        $this->sender = $sender;
        return $this;
    }

    public function getRecipient(): ?Customer
    {
        return $this->recipient;
    }

    public function setRecipient(?Customer $recipient): static
    {
        $this->recipient = $recipient;
        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): static
    {
        $this->content = $content;
        return $this;
    }

    public function isRead(): ?bool
    {
        return $this->is_read;
    }

    public function setIsRead(bool $is_read): static
    {
        $this->is_read = $is_read;
        if ($is_read) {
            $this->read_at = new \DateTimeImmutable();
        }
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;
        return $this;
    }

    public function getReadAt(): ?\DateTimeImmutable
    {
        return $this->read_at;
    }

    public function setReadAt(?\DateTimeImmutable $read_at): static
    {
        $this->read_at = $read_at;
        return $this;
    }

    public function getConversation(): ?int
    {
        return $this->conversation;
    }

    public function setConversation(?int $conversation): static
    {
        $this->conversation = $conversation;
        return $this;
    }

    #[ORM\PrePersist]
    public function setCreatedAtValue(): void
    {
        $this->created_at = new \DateTimeImmutable();
    }
}