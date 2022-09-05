<?php  
    trait myTrait {
        protected function myFunc1 (string $data) : string  
        {
            return $data;
        }

        protected function myFunc2 (string $data) : string  
        {
            return $data;
        }
    }

    interface myInterface {
        public function myFunc3 (): string;
    }

    abstract class myClass implements myInterface
    {
        use myTrait;
        
        protected string $myPro;
        protected string $title;

        public function __construct(string $data)
        {
            $this->title = $data;
        }

        public function myFunc3 (): string
        {
            $this->myPro = $this->myFunc1("Asif")." ".$this->myFunc2("Abir"); $this->myPro;
            return $this->title.": ".$this->myPro;
        }

        public abstract function myFunc4(): string;
    }

    class myChield extends myClass
    {
        public function myFunc4(): string
        {
            return $this->myFunc3();
        }
    }

    $myChield = new myChield("Name");
    echo $myChield->myFunc4();
?>