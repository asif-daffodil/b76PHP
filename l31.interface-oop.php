<?php  
    interface personInfo {
        public function personName () : string;
        public function personAge () : int;
    }

    class myClass implements personInfo
    {
        protected string $name;
        protected int $age;
        public function __construct(string $name = "", int $age)
        {
            $this->name = $name;
            $this->age = $age;
        }

        public function personName () : string
        {
            return $this->name;
        }

        public function personAge () : int
        {
            return $this->age;
        }
    }

    class myChild extends myClass implements personInfo
    {
        public function personAge () : int
        {
            return $this->age;
        }

        public function personName(): string
        {
            return "Asif";
        }
    }

    $myClass = new myClass("Tazul Vai", 42);
    echo "Person name is : ".$myClass->personName()." and person age is ".$myClass->personAge()."<br>";

    $myChild = new myChild(age:420);
    echo $myChild->personAge()." ".$myChild->personName();
?>