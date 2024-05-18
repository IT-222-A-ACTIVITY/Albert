<?php
class Logger {
    public static function log($message) {
        // Log message to a file, database, or any other destination
        file_put_contents('log.txt', $message . PHP_EOL, FILE_APPEND);
    }
}

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
        $message = $student->getName() . " has enrolled in " . $this->getTitle() . ".";
        Logger::log($message);
        echo $message . "\n";
    }

    public function completeCourse($student) {
        $message = $student->getName() . " has completed " . $this->getTitle() . ".";
        Logger::log($message);
        echo $message . "\n";
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
        $message = $this->getName() . " has registered for " . $course->getTitle() . ".";
        Logger::log($message);
        echo $message . "\n";
    }

    public function dropCourse($course) {
        $message = $this->getName() . " has dropped " . $course->getTitle() . ".";
        Logger::log($message);
        echo $message . "\n";
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
        $message = $this->getName() . " has created the course: " . $title . ".";
        Logger::log($message);
        echo $message . "\n";
    }

    public function gradeAssignment($student) {
        $message = $this->getName() . " has graded an assignment for " . $student->getName() . ".";
        Logger::log($message);
        echo $message . "\n";
    }
}

$student = new Student("Dendi", 1);
$instructor = new Instructor("Nibats", 101);

$course = new course("Introduction to Programming", $instructor);
$student->registerStudent($course);
$course->enrollCourse($student);
$course->completeCourse($student);
$student->dropCourse($course);
$instructor->gradeAssignment($student);
