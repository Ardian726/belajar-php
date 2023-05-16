<?php
    class Person {
        public $name;
        public $age;
      
        function __construct($name, $age) {
          $this->name = $name;
          $this->age = $age;
        }
      
        function getInfo() {
          return $this->name . ', umur saya sekarang ' . $this->age;
        }
      }
      
      $person1 = new Person("Sarah", 25);
      echo "Nama saya adalah " . $person1->getInfo() . " tahun.";
      
?>