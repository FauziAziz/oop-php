<?php

    class Orang {
        private $nama;
        function __construct ($nama) {
            $this->nama=$nama;
            echo "Constructor: $this->nama dilahirkan\n";
        }
        function UcapSalam() {
            echo "hallo, nama saya adalah".$this->nama."\n";
        }
        function __destruct() {
            echo "Destructor: $this->nama meninggal dunia\n";
        }
    }

?>