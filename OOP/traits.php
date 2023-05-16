<?php
    class Notication
    {
        const OOP = "OOP is so funny to learn, but so hard";
    }

    trait learn
    {
        public function learnOOP()
        {
            echo Notication::OOP;
        }
    }

    class LearToday
    {
        use learn;
    }
?>