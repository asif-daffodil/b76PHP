<?php  
    class myClass
    {
        private static string $name = "Mir Jafor";

        public static function myFunc () : string
        {
            return myClass::$name;    
        }
    }

    $obj = new myClass;
    // echo myClass::$name;
    echo $obj->myFunc();
?>