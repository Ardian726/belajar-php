<?php
    class Rectangle {
        public $length;
        public $width;
      
        function __construct($length, $width)
        {
          $this->length = $length;
          $this->width = $width;
        }
      
        function calculateArea()
        {
          return $this->length * $this->width;
        }
    }
      
    $rectangle1 = new Rectangle(5, 8);
    echo "Luas persegi panjang adalah " . $rectangle1->calculateArea() . " cm <br>";      
?>