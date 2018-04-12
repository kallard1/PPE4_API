<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\DateFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

// Utilisation des filters pour filtrer les interventions par utilisateurs ET par date ?

/**
 * Interventions
 *
 * @ApiResource(
 *     attributes={
 *     "normalization_context"={
 *      "groups"={"interventions"}
 *     }
 * })
 * @ApiFilter(DateFilter::class, properties={"date"})
 * @ORM\Table(name="interventions", indexes={@ORM\Index(name="IDX_5ADBAD7F845AE038", columns={"address_customer_id"}), @ORM\Index(name="IDX_5ADBAD7F9395C3F3", columns={"customer_id"}), @ORM\Index(name="IDX_5ADBAD7F8C03F15C", columns={"employee_id"}), @ORM\Index(name="IDX_5ADBAD7F9658649C", columns={"motive_id"})})
 * @ORM\Entity
 */
class Intervention
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups({"interventions"})
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     * @Groups({"interventions"})
     */
    private $date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="report", type="text", length=16, nullable=true)
     * @Groups({"interventions"})
     */
    private $report;

    /**
     * @var AddressCustomers
     *
     * @ORM\ManyToOne(targetEntity="AddressCustomers", inversedBy="intervention")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="address_customer_id", referencedColumnName="id")
     * })
     * @Groups({"interventions"})
     */
    private $addressCustomer;

    /**
     * @var Employee
     *
     * @ORM\ManyToOne(targetEntity="Employee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="employee_id", referencedColumnName="id")
     * })
     * @ApiFilter(SearchFilter::class, strategy="exact")
     * @Groups({"interventions"})
     */
    private $employee;

    /**
     * @var Motive
     *
     * @ORM\ManyToOne(targetEntity="Motive")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="motive_id", referencedColumnName="id")
     * })
     * @Groups({"interventions"})
     */
    private $motive;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * @return null|string
     */
    public function getReport(): ?string
    {
        return $this->report;
    }

    /**
     * @param null|string $report
     */
    public function setReport(?string $report): void
    {
        $this->report = $report;
    }

    /**
     * @return AddressCustomers
     */
    public function getAddressCustomer(): AddressCustomers
    {
        return $this->addressCustomer;
    }

    /**
     * @return Employee
     */
    public function getEmployee(): Employee
    {
        return $this->employee;
    }

    /**
     * @return Motive
     */
    public function getMotive(): Motive
    {
        return $this->motive;
    }
}
