<?php

require 'student.php';

class StudentManager
{
    private array $students = [];
    public function getStudents()
    {
        return $this->students;
    }
    public function displayStudents()
    {
        if (empty($this->students)) {
            echo "There is no students\n";
        } else {
            echo "\nStudents:\n";
            foreach ($this->students as $student) {
                echo "=======================\n";
                echo "Student Name: " . $student->getName() . "\n";
                echo "Student Grade: " . $student->getGrade() . "\n";
                echo "=======================\n";
            }
        }
    }
    public function addStudent(string $name, int $grade)
    {
        if ($grade > 100 || $grade < 0) {
            echo "Grade great then 100 or less then 0, Enter valide grade please\n";
            return;
        }

        $this->students[$name] = new Student($name, $grade);
        echo "Student Added Successfully\n";
    }
    public function removeStudent(string $name)
    {
        if (isset($this->students[$name])) {
            unset($this->students[$name]);
            echo "Student Removed Successfully\n";
            return;
        }
        echo "Student not found\n";
    }
    public function updateStudent(string $name, int $grade)
    {
        if (isset($this->students[$name])) {
            $this->students[$name]->setGrade($grade);
            echo "Student Updated Successfully\n";
            return;
        }
        echo "Student not found\n";
    }
}