<?php  
    final class myClass
    {
        public const myCon = "This is a text";
        protected static string $myPro = "Hello World";

        public function myFunc () :string
        {
            myClass::$myPro = "Ekti Bangladesh";
            return myClass::$myPro;
        }
    }

    $obj = new myClass;
    echo myClass::myCon;
?>