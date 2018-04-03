<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * AddressCustomers
 *
 * @ORM\Table(name="address_customers", indexes={@ORM\Index(name="IDX_F81272699395C3F3", columns={"customer_id"})})
 * @ORM\Entity
 */
class AddressCustomers
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
     * @ORM\Column(name="street_number", type="string", length=4, nullable=true)
     * @Groups({"interventions"})
     */
    private $streetNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="street_name", type="string", length=255, nullable=false)
     * @Groups({"interventions"})
     */
    private $streetName;

    /**
     * @var string
     *
     * @ORM\Column(name="zip_code", type="string", length=10, nullable=false)
     * @Groups({"interventions"})
     */
    private $zipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=false)
     * @Groups({"interventions"})
     */
    private $city;

    /**
     * @var ContactsCustomers
     * @ORM\ManyToOne(targetEntity="ContactsCustomers")
     * @ORM\JoinColumns({
     *     @ORM\JoinColumn(name="contact_id", referencedColumnName="id", nullable=true)
     * })
     * @Groups({"interventions"})
     */
    private $contact;

    /**
     * @var Customer
     *
     * @ORM\ManyToOne(targetEntity="Customer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     * })
     * @Groups({"interventions"})
     */
    private $customer;

    /**
     * @var Intervention
     * @ORM\OneToMany(targetEntity="App\Entity\Intervention", mappedBy="addressCustomer")
     */
    private $intervention;

    /**
     * AddressCustomers constructor.
     */
    public function __construct()
    {
        $this->intervention = new ArrayCollection();
    }

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
    public function getStreetNumber(): ?string
    {
        return $this->streetNumber;
    }

    /**
     * @return string
     */
    public function getStreetName(): string
    {
        return $this->streetName;
    }

    /**
     * @return string
     */
    public function getZipCode(): string
    {
        return $this->zipCode;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @return ContactsCustomers
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @return Customer
     */
    public function getCustomer(): Customer
    {
        return $this->customer;
    }
}
