<?php
    class Student
    {
        public $name;
        public $age;
    }

    $student1 = new Student();

    // Cara ke-1
    echo "<br>";
    $student1->name = "John";
    echo "<br>";
    $student1->age = 20;
    echo "Nama saya adalah " .  $student1->name . ', umur saya sekarang ' . $student1->age;
?>