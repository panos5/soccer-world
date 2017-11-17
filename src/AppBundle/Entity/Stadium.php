<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stadium
 *
 * @ORM\Table(name="stadium")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StadiumRepository")
 */
class Stadium
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="capacity", type="string", length=255)
     */
    private $capacity;

    /**
     * @var bool
     *
     * @ORM\Column(name="parking_available", type="boolean")
     */
    private $parkingAvailable;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Stadium
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set capacity
     *
     * @param string $capacity
     *
     * @return Stadium
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get capacity
     *
     * @return string
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set parkingAvailable
     *
     * @param boolean $parkingAvailable
     *
     * @return Stadium
     */
    public function setParkingAvailable($parkingAvailable)
    {
        $this->parkingAvailable = $parkingAvailable;

        return $this;
    }

    /**
     * Get parkingAvailable
     *
     * @return bool
     */
    public function getParkingAvailable()
    {
        return $this->parkingAvailable;
    }
}

