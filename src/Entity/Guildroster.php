<?php

namespace App\Entity;

use App\Repository\GuildrosterRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GuildrosterRepository::class)
 */
class Guildroster
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $guildName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $realmName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $memberName;

    /**
     * @ORM\Column(type="integer")
     */
    private $memberId;

    /**
     * @ORM\Column(type="integer")
     */
    private $level;

    /**
     * @ORM\Column(type="integer")
     */
    private $playableClass;

    /**
     * @ORM\Column(type="integer")
     */
    private $playableRace;

    /**
     * @ORM\Column(type="integer")
     */
    private $rank;

    /**
     * @ORM\Column(type="date")
     */
    private $DateAdded;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateLastSeen;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGuildName(): ?string
    {
        return $this->guildName;
    }

    public function setGuildName(string $guildName): self
    {
        $this->guildName = $guildName;

        return $this;
    }

    public function getRealmName(): ?string
    {
        return $this->realmName;
    }

    public function setRealmName(string $realmName): self
    {
        $this->realmName = $realmName;

        return $this;
    }

    public function getMemberName(): ?string
    {
        return $this->memberName;
    }

    public function setMemberName(string $memberName): self
    {
        $this->memberName = $memberName;

        return $this;
    }

    public function getMemberId(): ?int
    {
        return $this->memberId;
    }

    public function setMemberId(int $memberId): self
    {
        $this->memberId = $memberId;

        return $this;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(int $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getPlayableClass(): ?int
    {
        return $this->playableClass;
    }

    public function setPlayableClass(int $playableClass): self
    {
        $this->playableClass = $playableClass;

        return $this;
    }

    public function getPlayableRace(): ?int
    {
        return $this->playableRace;
    }

    public function setPlayableRace(int $playableRace): self
    {
        $this->playableRace = $playableRace;

        return $this;
    }

    public function getRank(): ?int
    {
        return $this->rank;
    }

    public function setRank(int $rank): self
    {
        $this->rank = $rank;

        return $this;
    }

    public function getDateAdded(): ?\DateTimeInterface
    {
        return $this->DateAdded;
    }

    public function setDateAdded(\DateTimeInterface $DateAdded): self
    {
        $this->DateAdded = $DateAdded;

        return $this;
    }

    public function getDateLastSeen(): ?\DateTimeInterface
    {
        return $this->dateLastSeen;
    }

    public function setDateLastSeen(?\DateTimeInterface $dateLastSeen): self
    {
        $this->dateLastSeen = $dateLastSeen;

        return $this;
    }
}
