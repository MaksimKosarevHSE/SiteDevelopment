<?php

class Student extends User{
    private int $studentID;
    private int $course;
    private string $faculty;
    private int $group;

    public function getStudentID(): int
    {
        return $this->studentID;
    }

    public function setStudentID(int $studentID): void
    {
        $this->studentID = $studentID;
    }

    public function getCourse(): int
    {
        return $this->course;
    }

    public function setCourse(int $course): void
    {
        $this->course = $course;
    }

    public function getFaculty(): string
    {
        return $this->faculty;
    }

    public function setFaculty(string $faculty): void
    {
        $this->faculty = $faculty;
    }

    public function getGroup(): int
    {
        return $this->group;
    }

    public function setGroup(int $group): void
    {
        $this->group = $group;
    }

    public function __toString()
    {
        return parent::__toString() . ", studentID=" . $this->studentID . ", Course=" . $this->course;
    }


}