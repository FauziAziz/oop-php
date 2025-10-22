<?php
    class Visibility{
        public $public = "Public kuy";
        public $protected = "Protected oy";
        public $private = "private ya";

        function CetakProperti()
        {
            echo "akses dari dalam class\n";
            echo "public : ".$this->public."\n";
            echo "protected : ".$this->protected."\n";
            echo "private : ".$this->private."\n";

        }
    }

    $obj = new Visibility();
    $obj->CetakProperti();

    echo "\n Pengaksesan di luar class \n";
    echo "Public :".$obj->public."\n";
    echo "Protected :".$obj->protected."\n";
    echo "Privte :".$obj->private."\n";

?>