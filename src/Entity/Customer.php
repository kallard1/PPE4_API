<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;

/**
 * Customers
 *
 * @ApiResource(
 *     attributes={
 *     "normalization_context"={
 *      "groups"={"customers"}
 *     }
 * })
 * @ORM\Table(name="customers")
 * @ORM\Entity
 */
class Customer
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="business_name", type="string", length=255, nullable=true)
     * @Groups({"interventions", "customers"})
     */
    private $businessName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=75, nullable=false)
     * @Groups({"interventions", "customers"})
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=75, nullable=false)
     * @Groups({"interventions", "customers"})
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     * @Groups({"interventions", "customers"})
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", length=15, nullable=true)
     * @Groups({"interventions", "customers"})
     */
    private $phone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mobile", type="string", length=15, nullable=true)
     * @Groups({"interventions", "customers"})
     */
    private $mobile;

    /**
     * @ApiFilter(SearchFilter::class, strategy="exact")
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="customer")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id", nullable=true)
     */
    private $category;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return null|string
     */
    public function getBusinessName(): ?string
    {
        return $this->businessName;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return null|string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @return null|string
     */
    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

}
