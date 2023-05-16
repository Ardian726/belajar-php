<?php
    class Animal
    {
        private $name;
        private $sound;
        
        public function __construct($name, $sound)
        {
            $this->name = $name;
            $this->sound = $sound;
        }
        
        public function makeSound()
        {
            echo $this->sound;
        }
    }
    
    $animal1 = new Animal('COW', 'MOOOO');
    $animal1->makeSound();
?>