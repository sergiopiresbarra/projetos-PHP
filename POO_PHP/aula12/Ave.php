<?php
require_once "Animal.php";
class Ave extends Animal{
    private $corPena;

    public function alimentar(){
        echo "<p>Comendo Frutas</p>";
    }
    public function emitirSom(){
        echo "<p>Som de Ave</p>";
    }
    public function locomover(){
        echo "<p>Voando</p>";
    }
    public function fazerNinho(){
        echo "<p>Construiu um Ninho!</p>";
    }

    /**
     * Get the value of corPena
     */ 
    public function getCorPena()
    {
        return $this->corPena;
    }

    /**
     * Set the value of corPena
     *
     * @return  self
     */ 
    public function setCorPena($corPena)
    {
        $this->corPena = $corPena;

        return $this;
    }
}

