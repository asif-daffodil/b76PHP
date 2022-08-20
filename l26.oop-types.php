<?php  
    class myClass
    {
        protected string $myName = "Aslam Mia"; 
        protected int $myIncome = 250;
        
        public function myFunc() : int
        {
            return 1000;
        }
    }

    $obj = new myClass;
    echo $obj->myFunc();
?>