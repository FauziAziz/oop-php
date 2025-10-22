<?php
    include("waris1.php");

    class orangSunda extends orang {

    }
    class orangInggris extends orang{
        protected $asal="England";
        function ucapSalam() {
            echo "wassup hommie ma name is ".$this->nama."\n";
        }
        function ucapNegara(){
            echo "i`m from ".$this->asal."\n";
        }
    }


    $kabayan=new orangSunda("kabayan");
    $kabayan->ucapSalam();
    $centralcee=new orangInggris("Central Cee");
    $centralcee->ucapSalam();
    $centralcee->ucapNegara();
?>