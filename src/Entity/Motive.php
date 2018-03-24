<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Motives
 *
 * @ORM\Table(name="motives")
 * @ORM\Entity
 */
class Motive
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
     * @ORM\Column(name="label", type="string", length=50, nullable=true)
     */
    private $label;

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
    public function getLabel(): ?string
    {
        return $this->label;
    }
}
