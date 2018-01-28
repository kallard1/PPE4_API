<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Interventions
 *
 * @ORM\Table(name="interventions", indexes={@ORM\Index(name="IDX_5ADBAD7F845AE038", columns={"address_customer_id"}), @ORM\Index(name="IDX_5ADBAD7F9395C3F3", columns={"customer_id"}), @ORM\Index(name="IDX_5ADBAD7F8C03F15C", columns={"employee_id"}), @ORM\Index(name="IDX_5ADBAD7F9658649C", columns={"motive_id"})})
 * @ORM\Entity
 */
class Interventions
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="report", type="text", length=16, nullable=true)
     */
    private $report;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdAt = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $updatedAt = 'CURRENT_TIMESTAMP';

    /**
     * @var AddressCustomers
     *
     * @ORM\ManyToOne(targetEntity="AddressCustomers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="address_customer_id", referencedColumnName="id")
     * })
     */
    private $addressCustomer;

    /**
     * @var Customer
     *
     * @ORM\ManyToOne(targetEntity="Customer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     * })
     */
    private $customer;

    /**
     * @var Employees
     *
     * @ORM\ManyToOne(targetEntity="Employees")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="employee_id", referencedColumnName="id")
     * })
     */
    private $employee;

    /**
     * @var Motives
     *
     * @ORM\ManyToOne(targetEntity="Motives")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="motive_id", referencedColumnName="id")
     * })
     */
    private $motive;


}
