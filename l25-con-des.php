<?php  
    class myClass
    {
        protected $myPro = "Amar Property";
        public function __construct()
        {
            echo "Amar Bangladesh";
        }
        public function myFunc()
        {
            return $this->myPro;
        }
        public function __destruct()
        {
            echo "<br>Amar Ami";
        }
    }
    $obj = new myClass;
    echo "<br>".$obj->myFunc();
?>