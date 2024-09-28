<?php
include_once "User.php";
class Student extends User{
    private int $studentID;
    private ?int $course;
    private ?string $faculty;
    private ?int $group;


    public function __construct(int $userId, string $email, string $password, string $firstName, string $lastName, ?string $thirdName, ?string $avatarUrl, string $positionId, int $studentID, ?int $course, ?string $faculty, ?int $group)
    {
        parent::__construct($userId, $email, $password, $firstName, $lastName, $thirdName, $avatarUrl, $positionId);
        $this->studentID = $studentID;
        $this->course = $course;
        $this->faculty = $faculty;
        $this->group = $group;
    }


    public function getStudentID(): int
    {
        return $this->studentID;
    }

    public function setStudentID(int $studentID): void
    {
        $this->studentID = $studentID;
    }

    public function getCourse(): ?int
    {
        return $this->course;
    }

    public function setCourse(?int $course): void
    {
        $this->course = $course;
    }

    public function getFaculty(): ?string
    {
        return $this->faculty;
    }

    public function setFaculty(?string $faculty): void
    {
        $this->faculty = $faculty;
    }

    public function getGroup(): ?int
    {
        return $this->group;
    }

    public function setGroup(?int $group): void
    {
        $this->group = $group;
    }

    public function __toString()
    {
        return parent::__toString() . ", studentID=" . $this->studentID . ", Course=" . $this->course . ", Faculty=" . $this->faculty . ", Group=" . $this->group;
    }


}