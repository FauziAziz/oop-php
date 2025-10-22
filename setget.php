<?php
    class nilai{
        private $tugas=0, $uts=0, $uas=0;
        function settugas($nilai) {
            if (($nilai<=100)&&($nilai>=0))
                $this->tugas=$nilai;
        }
        function setuts($nilai){
            if(($nilai<=100)&&($nilai>=0))
                $this->uts=$nilai;
        }

        function setuas($nilai){
            if(($nilai<=100)&&($nilai>=0))
                $this->uas=$nilai;
        }
        function gettugas() {
            return $this->tugas;
        }
        function getuts() {
            return $this->uts;
        }
        function getuas() {
            return $this->uas;
        }
        function getNA(){
            $nilaiakhir=0.2*$this->tugas+
                                0.3*$this->uts+
                                0.5*$this->uas;
            return $nilaiakhir;
        }
        function tampil(){
            echo "Nilai Tugas :".$this->tugas.
                 "Nilai UTS :".$this->uts.
                 "Nilai UAS :".$this->uas.
                 "Nilai akhir :".$this->getNA()."\n";
        
            }
    }// eoc nilai

    //poc class nilai

    $nilai=new nilai();
    $nilai->settugas(80);
    echo "nilai tugas sekarang adalah :".$nilai->gettugas()."\n";
    $nilai->setuts(60);
    $nilai->setuas(90);
    $nilai->tampil();
    $nilai->setuas(110);
    $nilai->tampil();
    echo "Nilai akhir adalah :".$nilai->getNA();



?>