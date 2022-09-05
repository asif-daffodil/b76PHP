<?php  
    abstract class myClass
    {
        protected string $name;

        public function __construct(string $name)
        {
            return $this->name = $name;
        }

        abstract protected function myFunc() : string;
    }

    class myChiled extends myClass 
    {
        public function myFunc(): string
        {
            return $this->name;
        }
    }

    $myChiled = new myChiled("Joy Bangla");
    echo $myChiled->myFunc();
?>