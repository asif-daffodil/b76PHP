<?php

    class myClass
    {
        public $myProperty = "For All";
        protected $myOtherProperty = "Only for my family";
        private $onliMine = "Amar Ami";

        public function myFunc ()
        {
            return $this->myProperty."<br>".$this->myOtherProperty."<br>".$this->onliMine;
        }
    }

    class myChield extends myClass
    {
        public function myChieldFunc ()
        {
            return $this->myProperty."<br>".$this->myOtherProperty."<br>";
        }
    }

    $myObj = new myClass;
    echo $myObj->myProperty."<br>";
    // echo $myObj->myOtherProperty;
    echo $myObj->myFunc();

    $myChieldObj = new myChield;
    echo $myChieldObj->myChieldFunc();

?>