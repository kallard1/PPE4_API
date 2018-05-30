<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Customers
 *
 * @ApiResource(
 *     attributes={
 *     "normalization_context"={
 *      "groups"={"category"}
 *     }
 * })
 * @ORM\Table(name="category")
 * @ORM\Entity
 */
class Category
{
    /**
     * @var int
     *
     * @Groups({"category"})
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @Groups({"category"})
     * @ORM\Column(name="label", type="string", unique=true)
     */
    private $label;

    /**
     * One Product has Many Features.
     * @ORM\OneToMany(targetEntity="Customer", mappedBy="category")
     */
    private $customer;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @return mixed
     */
    public function getCustomer()
    {
        return $this->customer;
    }
}