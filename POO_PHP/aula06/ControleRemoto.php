<?php
require_once "Controlador.php";
class ControleRemoto implements Controlador{
    //atributos
    private $volume;
    private $ligado;
    private $tocando;
    //metodos especiais
    function __construct()
    {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }
    
    /**
     * Get the value of volume
     */ 
    private function getVolume()
    {
        return $this->volume;
    }

    /**
     * Set the value of volume
     *
     * @return  self
     */ 
    private function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Get the value of ligado
     */ 
    private function getLigado()
    {
        return $this->ligado;
    }

    /**
     * Set the value of ligado
     *
     * @return  self
     */ 
    private function setLigado($ligado)
    {
        $this->ligado = $ligado;

        return $this;
    }

    /**
     * Get the value of tocando
     */ 
    private function getTocando()
    {
        return $this->tocando;
    }

    /**
     * Set the value of tocando
     *
     * @return  self
     */ 
    private function setTocando($tocando)
    {
        $this->tocando = $tocando;

        return $this;
    }

    //metodos
    public function ligar(){
        $this->setLigado(true);
    }
    public function desligar(){
        $this->setLigado(false);
    }
    public function abrirMenu()
    {
        echo "<br>Está ligado?: ". ($this->getLigado()?"SIM":"Não");
        echo "<br>Está tocando?: ".($this->getTocando()?"SIM":"Não");
        echo "<br>Volume: ". $this->getVolume();
        for($i=0; $i<=$this->getVolume(); $i+=10){
            echo "|";
        }
        echo "<br>";
    }   
    public function fecharMenu()
    {
        echo "<br>Fechando menu...";
    }
    public function maisVolume()
    {
        if($this->getLigado()){
            $this->setVolume($this->getVolume()+10);
        }
        else{
            echo "<p>Erro: Não posso aumentar o Volume</p>";
        }
    }
    public function menosVolume()
    {
        if($this->getLigado()){
            $this->setVolume($this->getVolume()-10);
        }
        else{
            echo "<p>Erro: Não posso diminuir o Volume</p>";
        }
    }
    public function ligarMudo()
    {
        if($this->getLigado() && $this->getVolume()>0){
            $this->setVolume(0);
        }
    }
    public function desligarMudo()
    {
        if($this->getLigado() && $this->getVolume ==0){
            $this->setVolume(50);
        }
    }
    public function play()
    {
        if($this->getLigado() && !($this->getTocando())){
            $this->setTocando(true);            
        }
    }
    public function pause()
    {
        if($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
        }
    }

}
