<?php

class User{
    private int $userId;
    private string $email;
    private string $firstName;
    private string $lastName;
    private ?string $thirdName = null;
    private bool $confirmedEmail;
    private ?string $avatarUrl = null;
    private int $positionId;



    public function __construct(int $userId, string $email, string $firstName, string $lastName, ?string $thirdName, int $confirmedEmail, ?string $avatarUrl, int $positionId)
    {
        $this->userId = $userId;
        $this->email = $email;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->thirdName = $thirdName;
        $this->confirmedEmail = $confirmedEmail == 1;
        $this->avatarUrl = $avatarUrl;
        $this->positionId = $positionId;
    }


    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $id): void
    {
        $this->userId = $id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function getThirdName(): ?string
    {
        return $this->thirdName;
    }

    public function setThirdName(?string $thirdName): void
    {
        $this->thirdName = $thirdName;
    }

    public function getAvatarUrl(): ?string
    {
        return $this->avatarUrl;
    }

    public function setAvatarUrl(?string $avatarUrl): void
    {
        $this->avatarUrl = $avatarUrl;
    }

    public function getPositionId(): int
    {
        return $this->positionId;
    }

    public function setPositionId(int $positionId): void
    {
        $this->positionId = $positionId;
    }

    public function isConfirmedEmail(): bool
    {
        return $this->confirmedEmail;
    }

    public function setConfirmedEmail(bool $confirmedEmail): void
    {
        $this->confirmedEmail = $confirmedEmail;
    }

    public function __toString()
    {
        return "userId=" . $this->userId . ", email=" . $this->email . ", firstName=" . $this->firstName . ", lastName=" . $this->lastName . ", thirdName=" . $this->thirdName . ", confirmed_email=" . $this->confirmedEmail .  ", avatarUrl=" . $this->avatarUrl . ", positionId=" . $this->positionId;
    }


}