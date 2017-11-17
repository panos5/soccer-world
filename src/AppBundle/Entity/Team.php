<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Team
 *
 * @ORM\Table(name="team")
 * @ORM\Entity
 */
class Team
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="shirt_colours", type="string", length=255, nullable=false)
     */
    private $shirtColours;

    /**
     * @var string
     *
     * @ORM\OneToOne(targetEntity="Stadium")
     * @ORM\JoinColumn(name="stadium_id", nullable=false, referencedColumnName="id")
     */
    private $stadiumId;

    /**
     * @var integer
     *
     * @ORM\Column(name="number_of_players", type="integer", nullable=false)
     */
    private $numberOfPlayers;

    /**
     * @var string
     *
     * @ORM\Column(name="division", type="string", length=32, nullable=false)
     */
    private $division;

    /**
     * @var string
     *
     * @ORM\Column(name="manager_name", type="string", length=255, nullable=false)
     */
    private $managerName;

    /**
     * @var string
     *
     * @ORM\Column(name="boss_name", type="string", length=255, nullable=false)
     */
    private $bossName;

    /**
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getShirtColours() {
        return $this->shirtColours;
    }

    /**
     * @param string $shirtColours
     */
    public function setShirtColours($shirtColours) {
        $this->shirtColours = $shirtColours;
    }

    /**
     * @return integer
     */
    public function getStadiumId() {
        return $this->stadiumId;
    }

    /**
     * @param string $stadiumId
     */
    public function setStadium($stadiumId) {
        $this->stadiumId = $stadiumId;
    }

    /**
     * @return int
     */
    public function getNumberOfPlayers() {
        return $this->numberOfPlayers;
    }

    /**
     * @param int $numberOfPlayers
     */
    public function setNumberOfPlayers($numberOfPlayers) {
        $this->numberOfPlayers = $numberOfPlayers;
    }

    /**
     * @return string
     */
    public function getDivision() {
        return $this->division;
    }

    /**
     * @param string $division
     */
    public function setDivision($division) {
        $this->division = $division;
    }

    /**
     * @return string
     */
    public function getManagerName() {
        return $this->managerName;
    }

    /**
     * @param string $managerName
     */
    public function setManagerName($managerName) {
        $this->managerName = $managerName;
    }

    /**
     * @return string
     */
    public function getBossName() {
        return $this->bossName;
    }

    /**
     * @param string $bossName
     */
    public function setBossName($bossName) {
        $this->bossName = $bossName;
    }

}

