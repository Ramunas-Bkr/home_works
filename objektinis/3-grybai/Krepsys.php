<?php

class Krepsys 
{
    private $svoris;
    private $kiekis = 0;


    public function grybauju (Grybas $grybas) 
    {
        if ($grybas -> getValgomas() == true && $grybas -> getSukirmijes() == false){
            $this -> svoris += $grybas -> getSvoris();
            $this -> kiekis ++;
        }
    }
    public function getSvoris()
    {
        return $this -> svoris;
    }

    public function getKiekis()
    {
        return $this -> kiekis;
    }

}