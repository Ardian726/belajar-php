<?php
    class oop {
        public function publicMethod()
        {
            echo "Ini adalah OOP Metode Publik";
        }
        protected function protectedMethod()
        {
            echo "Ini adalah OOP Metode Protected";
        }
        private function privateMethod()
        {
            echo "Ini adalah OOP Metode Private";
        }

        public function accessWethodOOP()
        {
            $this->publicMethod();
            echo "<br>";
            $this->protectedMethod();
            echo "<br>";
            $this->privateMethod();
        }
    }

    $oop = new OOP();
    $oop->publicMethod();
    echo "<br>";
    $oop->accessWethodOOP();
?>