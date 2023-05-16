<?php
    class Circle {
        public $radius;
        public $area;
    
        function __construct($radius)
        {
            $this->radius = $radius;
        }
    
        function calculateArea()
        {
            $this->area = M_PI * $this->radius * $this->radius;
            return $this->area;
        }
    }
    
    $circle1 = new Circle(10);
    echo "Luas lingkaran : " . $circle1->calculateArea() . " cm<br>";
    
?>