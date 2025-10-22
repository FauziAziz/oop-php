<?php
    class orang{
        protected $nama;
        function __construct($nama){
            $this->nama=$nama;
        }
        function ucapSalam() {
            echo "hallo, saya ".$this->nama."\n";
        }
    }
?>