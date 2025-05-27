<?php

require './classes/studentsManager.php';

$student_manager = new StudentManager();

// Software interface
while (true) {
    echo "\n=======================\n";
    echo "1. Add Student\n";
    echo "2. Update Student\n";
    echo "3. Remove Student\n";
    echo "4. Display Students\n";
    echo "5. Exit\n";
    echo "=======================\n";

    echo "Choose An Option Please: ";
    $choice = fgets(STDIN);

    switch ($choice) {
        case 1:
            echo "Please, Enter Student Name To Add: ";
            $name = fgets(STDIN);
            echo "Please, Enter Student Grade To Add: ";
            $grade = fgets(STDIN);
            $student_manager->addStudent($name, $grade);
            break;
        case 2:
            echo "Please, Enter Student Name To Update: ";
            $name = fgets(STDIN);
            echo "Please, Enter Student Grade To Update: ";
            $grade = fgets(STDIN);
            $student_manager->updateStudent($name, $grade);
            break;
        case 3:
            echo "Please, Enter Student Name You Want To Delete: ";
            $name = fgets(STDIN);
            $student_manager->removeStudent($name);
            break;
        case 4:
            $student_manager->displayStudents();
            break;
        case 5:
            echo "Exiting...";
            exit;
    }
}

