<?php  
    final class myClass
    {
        protected static string $personName = "Amir Khan";

        private function __construct()
        {
            return false;
        }

        public static function personName () : string
        {
            return myClass::$personName;
        }
    }

    // $obj = new myClass;
    echo myClass::personName();
?>