<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* auth/customer_register.html.twig */
class __TwigTemplate_2591709566cec2eb15eb75e664c78f23 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/customer_register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/customer_register.html.twig"));

        // line 1
        yield "<?php
// src/Entity/Customer.php

namespace App\\Entity;

use App\\Repository\\CustomerRepository;
use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\Common\\Collections\\Collection;
use Doctrine\\DBAL\\Types\\Types;
use Doctrine\\ORM\\Mapping as ORM;
use Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntity;
use Symfony\\Component\\Security\\Core\\User\\PasswordAuthenticatedUserInterface;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;

#[ORM\\Entity(repositoryClass: CustomerRepository::class)]
#[ORM\\Table(name: 'customer')]
#[ORM\\HasLifecycleCallbacks]
#[UniqueEntity(fields: ['email'], message: 'Cet email est déjà utilisé')]
class Customer implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\\Id]
    #[ORM\\GeneratedValue]
    #[ORM\\Column]
    private ?int \$id = null;

    #[ORM\\Column(length: 180, unique: true)]
    private ?string \$email = null;

    #[ORM\\Column]
    private array \$roles = [];

    #[ORM\\Column]
    private ?string \$password = null;

    #[ORM\\Column(length: 100)]
    private ?string \$full_name = null;

    #[ORM\\Column(length: 30, nullable: true)]
    private ?string \$phone = null;

    #[ORM\\Column(length: 255, nullable: true)]
    private ?string \$address = null;

    #[ORM\\Column(length: 100, nullable: true)]
    private ?string \$city = null;

    #[ORM\\Column(length: 100, nullable: true)]
    private ?string \$country = null;

    #[ORM\\Column(type: Types::TEXT, nullable: true)]
    private ?string \$bio = null;

    #[ORM\\Column(length: 255, nullable: true)]
    private ?string \$photo = null;

    #[ORM\\Column]
    private ?bool \$is_active = true;

    #[ORM\\Column]
    private ?\\DateTimeImmutable \$created_at = null;

    #[ORM\\Column(nullable: true)]
    private ?\\DateTimeImmutable \$updated_at = null;

    #[ORM\\Column(nullable: true)]
    private ?\\DateTimeImmutable \$last_login_at = null;

    #[ORM\\OneToOne(mappedBy: 'customer', cascade: ['persist', 'remove'])]
    private ?Cart \$cart = null;

    /**
     * @var Collection<int, Order>
     */
    #[ORM\\OneToMany(targetEntity: Order::class, mappedBy: 'customer')]
    private Collection \$orders;

    public function __construct()
    {
        \$this->orders = new ArrayCollection();
        \$this->roles = ['ROLE_CUSTOMER'];
    }

    // ==================== GETTERS & SETTERS ====================

    public function getId(): ?int
    {
        return \$this->id;
    }

    public function getEmail(): ?string
    {
        return \$this->email;
    }

    public function setEmail(string \$email): static
    {
        \$this->email = \$email;
        return \$this;
    }

    public function getUserIdentifier(): string
    {
        return (string) \$this->email;
    }

    public function getRoles(): array
    {
        \$roles = \$this->roles;
        \$roles[] = 'ROLE_CUSTOMER';
        return array_unique(\$roles);
    }

    public function setRoles(array \$roles): static
    {
        \$this->roles = \$roles;
        return \$this;
    }

    public function getPassword(): ?string
    {
        return \$this->password;
    }

    public function setPassword(string \$password): static
    {
        \$this->password = \$password;
        return \$this;
    }

    public function eraseCredentials(): void {}

    public function getFullName(): ?string
    {
        return \$this->full_name;
    }

    public function setFullName(string \$full_name): static
    {
        \$this->full_name = \$full_name;
        return \$this;
    }

    public function getPhone(): ?string
    {
        return \$this->phone;
    }

    public function setPhone(?string \$phone): static
    {
        \$this->phone = \$phone;
        return \$this;
    }

    public function getAddress(): ?string
    {
        return \$this->address;
    }

    public function setAddress(?string \$address): static
    {
        \$this->address = \$address;
        return \$this;
    }

    public function getCity(): ?string
    {
        return \$this->city;
    }

    public function setCity(?string \$city): static
    {
        \$this->city = \$city;
        return \$this;
    }

    public function getCountry(): ?string
    {
        return \$this->country;
    }

    public function setCountry(?string \$country): static
    {
        \$this->country = \$country;
        return \$this;
    }

    public function getBio(): ?string
    {
        return \$this->bio;
    }

    public function setBio(?string \$bio): static
    {
        \$this->bio = \$bio;
        return \$this;
    }

    public function getPhoto(): ?string
    {
        return \$this->photo;
    }

    public function setPhoto(?string \$photo): static
    {
        \$this->photo = \$photo;
        return \$this;
    }

    public function isActive(): ?bool
    {
        return \$this->is_active;
    }

    public function setIsActive(bool \$is_active): static
    {
        \$this->is_active = \$is_active;
        return \$this;
    }

    public function getCreatedAt(): ?\\DateTimeImmutable
    {
        return \$this->created_at;
    }

    public function setCreatedAt(\\DateTimeImmutable \$created_at): static
    {
        \$this->created_at = \$created_at;
        return \$this;
    }

    public function getUpdatedAt(): ?\\DateTimeImmutable
    {
        return \$this->updated_at;
    }

    public function setUpdatedAt(?\\DateTimeImmutable \$updated_at): static
    {
        \$this->updated_at = \$updated_at;
        return \$this;
    }

    public function getLastLoginAt(): ?\\DateTimeImmutable
    {
        return \$this->last_login_at;
    }

    public function setLastLoginAt(?\\DateTimeImmutable \$last_login_at): static
    {
        \$this->last_login_at = \$last_login_at;
        return \$this;
    }

    public function getCart(): ?Cart
    {
        return \$this->cart;
    }

    public function setCart(?Cart \$cart): static
    {
        \$this->cart = \$cart;
        return \$this;
    }

    public function getOrders(): Collection
    {
        return \$this->orders;
    }

    public function addOrder(Order \$order): static
    {
        if (!\$this->orders->contains(\$order)) {
            \$this->orders->add(\$order);
            \$order->setCustomer(\$this);
        }
        return \$this;
    }

    public function removeOrder(Order \$order): static
    {
        if (\$this->orders->removeElement(\$order)) {
            if (\$order->getCustomer() === \$this) {
                \$order->setCustomer(null);
            }
        }
        return \$this;
    }

    #[ORM\\PrePersist]
    public function setCreatedAtValue(): void
    {
        \$this->created_at = new \\DateTimeImmutable();
    }

    #[ORM\\PreUpdate]
    public function setUpdatedAtValue(): void
    {
        \$this->updated_at = new \\DateTimeImmutable();
    }

    public function getFullNameOrEmail(): string
    {
        return \$this->full_name ?? \$this->email;
    }

    public function getInitials(): string
    {
        if (\$this->full_name) {
            \$parts = explode(' ', \$this->full_name);
            \$initials = '';
            foreach (\$parts as \$part) {
                if (!empty(\$part)) {
                    \$initials .= strtoupper(substr(\$part, 0, 1));
                }
            }
            return \$initials;
        }
        return strtoupper(substr(\$this->email, 0, 1));
    }
}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "auth/customer_register.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<?php
// src/Entity/Customer.php

namespace App\\Entity;

use App\\Repository\\CustomerRepository;
use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\Common\\Collections\\Collection;
use Doctrine\\DBAL\\Types\\Types;
use Doctrine\\ORM\\Mapping as ORM;
use Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntity;
use Symfony\\Component\\Security\\Core\\User\\PasswordAuthenticatedUserInterface;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;

#[ORM\\Entity(repositoryClass: CustomerRepository::class)]
#[ORM\\Table(name: 'customer')]
#[ORM\\HasLifecycleCallbacks]
#[UniqueEntity(fields: ['email'], message: 'Cet email est déjà utilisé')]
class Customer implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\\Id]
    #[ORM\\GeneratedValue]
    #[ORM\\Column]
    private ?int \$id = null;

    #[ORM\\Column(length: 180, unique: true)]
    private ?string \$email = null;

    #[ORM\\Column]
    private array \$roles = [];

    #[ORM\\Column]
    private ?string \$password = null;

    #[ORM\\Column(length: 100)]
    private ?string \$full_name = null;

    #[ORM\\Column(length: 30, nullable: true)]
    private ?string \$phone = null;

    #[ORM\\Column(length: 255, nullable: true)]
    private ?string \$address = null;

    #[ORM\\Column(length: 100, nullable: true)]
    private ?string \$city = null;

    #[ORM\\Column(length: 100, nullable: true)]
    private ?string \$country = null;

    #[ORM\\Column(type: Types::TEXT, nullable: true)]
    private ?string \$bio = null;

    #[ORM\\Column(length: 255, nullable: true)]
    private ?string \$photo = null;

    #[ORM\\Column]
    private ?bool \$is_active = true;

    #[ORM\\Column]
    private ?\\DateTimeImmutable \$created_at = null;

    #[ORM\\Column(nullable: true)]
    private ?\\DateTimeImmutable \$updated_at = null;

    #[ORM\\Column(nullable: true)]
    private ?\\DateTimeImmutable \$last_login_at = null;

    #[ORM\\OneToOne(mappedBy: 'customer', cascade: ['persist', 'remove'])]
    private ?Cart \$cart = null;

    /**
     * @var Collection<int, Order>
     */
    #[ORM\\OneToMany(targetEntity: Order::class, mappedBy: 'customer')]
    private Collection \$orders;

    public function __construct()
    {
        \$this->orders = new ArrayCollection();
        \$this->roles = ['ROLE_CUSTOMER'];
    }

    // ==================== GETTERS & SETTERS ====================

    public function getId(): ?int
    {
        return \$this->id;
    }

    public function getEmail(): ?string
    {
        return \$this->email;
    }

    public function setEmail(string \$email): static
    {
        \$this->email = \$email;
        return \$this;
    }

    public function getUserIdentifier(): string
    {
        return (string) \$this->email;
    }

    public function getRoles(): array
    {
        \$roles = \$this->roles;
        \$roles[] = 'ROLE_CUSTOMER';
        return array_unique(\$roles);
    }

    public function setRoles(array \$roles): static
    {
        \$this->roles = \$roles;
        return \$this;
    }

    public function getPassword(): ?string
    {
        return \$this->password;
    }

    public function setPassword(string \$password): static
    {
        \$this->password = \$password;
        return \$this;
    }

    public function eraseCredentials(): void {}

    public function getFullName(): ?string
    {
        return \$this->full_name;
    }

    public function setFullName(string \$full_name): static
    {
        \$this->full_name = \$full_name;
        return \$this;
    }

    public function getPhone(): ?string
    {
        return \$this->phone;
    }

    public function setPhone(?string \$phone): static
    {
        \$this->phone = \$phone;
        return \$this;
    }

    public function getAddress(): ?string
    {
        return \$this->address;
    }

    public function setAddress(?string \$address): static
    {
        \$this->address = \$address;
        return \$this;
    }

    public function getCity(): ?string
    {
        return \$this->city;
    }

    public function setCity(?string \$city): static
    {
        \$this->city = \$city;
        return \$this;
    }

    public function getCountry(): ?string
    {
        return \$this->country;
    }

    public function setCountry(?string \$country): static
    {
        \$this->country = \$country;
        return \$this;
    }

    public function getBio(): ?string
    {
        return \$this->bio;
    }

    public function setBio(?string \$bio): static
    {
        \$this->bio = \$bio;
        return \$this;
    }

    public function getPhoto(): ?string
    {
        return \$this->photo;
    }

    public function setPhoto(?string \$photo): static
    {
        \$this->photo = \$photo;
        return \$this;
    }

    public function isActive(): ?bool
    {
        return \$this->is_active;
    }

    public function setIsActive(bool \$is_active): static
    {
        \$this->is_active = \$is_active;
        return \$this;
    }

    public function getCreatedAt(): ?\\DateTimeImmutable
    {
        return \$this->created_at;
    }

    public function setCreatedAt(\\DateTimeImmutable \$created_at): static
    {
        \$this->created_at = \$created_at;
        return \$this;
    }

    public function getUpdatedAt(): ?\\DateTimeImmutable
    {
        return \$this->updated_at;
    }

    public function setUpdatedAt(?\\DateTimeImmutable \$updated_at): static
    {
        \$this->updated_at = \$updated_at;
        return \$this;
    }

    public function getLastLoginAt(): ?\\DateTimeImmutable
    {
        return \$this->last_login_at;
    }

    public function setLastLoginAt(?\\DateTimeImmutable \$last_login_at): static
    {
        \$this->last_login_at = \$last_login_at;
        return \$this;
    }

    public function getCart(): ?Cart
    {
        return \$this->cart;
    }

    public function setCart(?Cart \$cart): static
    {
        \$this->cart = \$cart;
        return \$this;
    }

    public function getOrders(): Collection
    {
        return \$this->orders;
    }

    public function addOrder(Order \$order): static
    {
        if (!\$this->orders->contains(\$order)) {
            \$this->orders->add(\$order);
            \$order->setCustomer(\$this);
        }
        return \$this;
    }

    public function removeOrder(Order \$order): static
    {
        if (\$this->orders->removeElement(\$order)) {
            if (\$order->getCustomer() === \$this) {
                \$order->setCustomer(null);
            }
        }
        return \$this;
    }

    #[ORM\\PrePersist]
    public function setCreatedAtValue(): void
    {
        \$this->created_at = new \\DateTimeImmutable();
    }

    #[ORM\\PreUpdate]
    public function setUpdatedAtValue(): void
    {
        \$this->updated_at = new \\DateTimeImmutable();
    }

    public function getFullNameOrEmail(): string
    {
        return \$this->full_name ?? \$this->email;
    }

    public function getInitials(): string
    {
        if (\$this->full_name) {
            \$parts = explode(' ', \$this->full_name);
            \$initials = '';
            foreach (\$parts as \$part) {
                if (!empty(\$part)) {
                    \$initials .= strtoupper(substr(\$part, 0, 1));
                }
            }
            return \$initials;
        }
        return strtoupper(substr(\$this->email, 0, 1));
    }
}", "auth/customer_register.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\auth\\customer_register.html.twig");
    }
}
