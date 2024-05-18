<?php
class Course {
    private $title;
    private $instructor;

    public function __construct($title, $instructor) {
        $this->title = $title;
        $this->instructor = $instructor;
    }

    public function getInstructor() {
        return $this->instructor;
    }
    public function getTitle() {
        return $this->title;
    }
    public function enrollCourse($student) {
        echo $student->getName() . " has enrolled in " . $this->getTitle() . ".\n";
    }

    public function completeCourse($student) {
        echo $student->getName() . " has completed " . $this->getTitle() . ".\n";
    }
}

class Student {
    private $name;
    private $id;

    public function __construct($name, $id) {
        $this->name = $name;
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }
    

    public function registerStudent($course) {
        echo $this->getName() . " has registered for " . $course->getTitle() . ".\n";
    }

    public function dropCourse($course) {
        echo $this->getName() . " has dropped " . $course->getTitle() . ".\n";
    }
}

class Instructor {
    private $name;
    private $id;

    public function __construct($name, $id) {
        $this->name = $name;
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function createCourse($title) {
        echo $this->getName() . " has created the course: " . $title . ".\n";
    }

    public function gradeAssignment($student) {
        echo $this->getName() . " has graded an assignment for " . $student->getName() . ".\n";
    }
}

$student = new Student("Dendi", 1);
$instructor = new Instructor("Nibats", 101);

$course = new course("Introduction to Programming",$instructor);
$student->registerStudent($course);
$course->enrollCourse($student);
$course->completeCourse($student);
$student->dropCourse($course);
$instructor->gradeAssignment($student);
?>
