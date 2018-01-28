<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Devices
 *
 * @ORM\Table(name="devices", uniqueConstraints={@ORM\UniqueConstraint(name="UQ__devices__8DF371FDBBDD8EA0", columns={"IMEI"})})
 * @ORM\Entity
 */
class Devices
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
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=50, nullable=false)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="IMEI", type="string", length=15, nullable=false)
     */
    private $imei;

    /**
     * @var string
     *
     * @ORM\Column(name="system", type="string", length=10, nullable=false)
     */
    private $system;

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=10, nullable=false)
     */
    private $version;

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
     * @var string
     *
     * @ORM\Column(name="mac_address", type="string", length=19, nullable=false, options={"default"="00:00:00:00:00:00"})
     */
    private $macAddress = '00:00:00:00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="purchase_date", type="date", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $purchaseDate = 'CURRENT_TIMESTAMP';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="isActive", type="boolean", nullable=true)
     */
    private $isactive = '0';


}
