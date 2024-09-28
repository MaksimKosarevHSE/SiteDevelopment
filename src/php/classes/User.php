<?php

class User{
    private int $userId;
    private string $email;
    private string $password;
    private string $firstName;
    private string $lastName;
    private string $thirdName;
    private string $avatarUrl;
    private string $positionId;

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
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

    public function getThirdName(): string
    {
        return $this->thirdName;
    }

    public function setThirdName(string $thirdName): void
    {
        $this->thirdName = $thirdName;
    }

    public function getAvatarUrl(): string
    {
        return $this->avatarUrl;
    }

    public function setAvatarUrl(string $avatarUrl): void
    {
        $this->avatarUrl = $avatarUrl;
    }

    public function getPositionId(): string
    {
        return $this->positionId;
    }

    public function setPositionId(string $positionId): void
    {
        $this->positionId = $positionId;
    }

    public function __toString()
    {
        return "userId=" . $this->userId . ", email=" . $this->email . ", password=" . $this->password . ", firstName=" . $this->firstName . ", lastName=" . $this->lastName . ", thirdName=" . $this->thirdName . ", avatarUrl=" . $this->avatarUrl . ", positionId=" . $this->positionId;
    }


}