<?php
    class Notication
    {
        const webDev = "Belajar Web Development PHP.";
    }

    interface study
    {
        public function personalStudy();
    }

    class school implements study
    {
        public function personalStudy()
        {
            echo Notication::webDev;
        }
    }

    $school = new school();
    $school->personalStudy();
?>