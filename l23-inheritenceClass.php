<?php  
    class dada{
        public $amGach = 20000;
    }

    class baba extends dada {
        public function myBaba () {
            return $this->amGach;
        }
    }

    class ami extends baba {
        public function shudhuAmar () {
            return $this->myBaba ();
        }
    }

    $obj = new ami;
    echo $obj->shudhuAmar();
?>