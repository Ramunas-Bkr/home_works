<?php

class Grybas 
{
    private $valgomas;
    private $sukirmijes;
    private $svoris;

    public function __construct()
    {
        $this -> setValgomas();
        $this -> setSukirmijes();
        $this -> setSvoris();
    }

    public function setValgomas()
    {
        $ArValgomas = rand (0,1);
        if ($ArValgomas == 0) {
            $this -> valgomas = true;
        } else {
            $this -> valgomas = false;
        }
    }

    public function setSukirmijes()
    {
        $ArSukirmyjes = rand (0,1);
        if ($ArSukirmyjes == 0) {
            $this -> sukirmijes = true;
        } else {
            $this -> sukirmijes = false;
        }
    }

    public function setSvoris()
    {
        $this -> svoris = rand (5,45);
    }

    public function getValgomas()
    {
        return $this -> valgomas;
    }
    public function getSukirmijes()
    {
        return $this -> sukirmijes;
    }
    public function getSvoris()
    {
        return $this -> svoris;
    }
    public static function create(){
        return new self;
    }

}