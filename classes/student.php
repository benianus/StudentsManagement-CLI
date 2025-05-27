<?php

class Student
{
    private string $name;
    private int $grade;
    public function __construct(string $name, int $grade)
    {
        $this->name = $name;
        $this->grade = $grade;
    }
    // setter
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function setGrade($grade): void
    {
        $this->grade = $grade;
    }
    // getter
    public function getName(): string
    {
        return $this->name;
    }
    public function getGrade(): int
    {
        return $this->grade;
    }
}