<?php

class Pinigine 
{
    private $monetos;
    private $banknotai;
    

    public function ideti ($kiekis) {

        if ($kiekis <= 2 ) {
            $this -> monetos += $kiekis;
        } else {
            $this-> banknotai += $kiekis;
        }
        return $this;
    }

    public function skaiciuoti()
    {
        echo 'Mano piniginėje yra '.$this -> monetos.' € monetų<br>';
        echo 'Mano piniginėje yra '.$this -> banknotai.'  € banknotų<br>';
        echo 'Mano piniginėje iš viso yra '.($this -> monetos + $this -> banknotai).' €.<br>';
    }

}
