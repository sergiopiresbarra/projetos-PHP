<?php
require_once "Publicacao.php";
require_once "Pessoa.php";

class Livro implements Publicacao{

    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function __construct($ti , $au, $to, $lei)
    {
        $this->titulo = $ti;
        $this->autor = $au;
        $this->totPaginas = $to;
        $this->leitor = $lei;
        $this->pagAtual = 0;
        $this->aberto = false;
    
    }
    public function detalhes(){
        echo "<p>----------------------------------</p>";
        echo "<p>Livro: {$this->getTitulo()}, Autor: {$this->getAutor()}, Qtd. Páginas: {$this->getTotPaginas()}<br>Pag. Atual: {$this->getPagAtual()}, Sendo lido por: {$this->leitor->getNome()}, Status Aberto: ".($this->getAberto()?"True":"False")."</p>";
    }
    public function abrir(){
        $this->setAberto(true);
    }
    public function fechar(){
        $this->setAberto(false);
        $this->setPagAtual(0);
    }
    public function folhear($p){
        if($p <= $this->getTotPaginas() && ($this->getAberto())){
            $this->setPagAtual($p);
        }else{
            echo "<p>Não é possivel Folhear!</p>";
        }
    }
    public function avancarPag(){
        if($this->getAberto()){
            if($this->getPagAtual() < $this->getTotPaginas()){
                $this->setPagAtual($this->getPagAtual() + 1);
            }else{
                echo "<p>Voce já está na Ultima Página!</p>";
            }
        }else{
            echo "<p>Não é Possivel Avancar!, Abra o Livro!</p>";
        }
    }
    public function voltarPag(){
        if($this->getAberto()){
            if($this->getPagAtual() > 0){
                $this->setPagAtual($this->getPagAtual() - 1);
            }else{
                echo "<p>Voce já está na Primeira Página!</p>";
            }
        }else{
            echo "<p>Não é Possivel Voltar!, Abra o Livro!</p>";
        }
    }
    


    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of autor
     */ 
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     *
     * @return  self
     */ 
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of totPaginas
     */ 
    public function getTotPaginas()
    {
        return $this->totPaginas;
    }

    /**
     * Set the value of totPaginas
     *
     * @return  self
     */ 
    public function setTotPaginas($totPaginas)
    {
        $this->totPaginas = $totPaginas;

        return $this;
    }

    /**
     * Get the value of pagAtual
     */ 
    public function getPagAtual()
    {
        return $this->pagAtual;
    }

    /**
     * Set the value of pagAtual
     *
     * @return  self
     */ 
    public function setPagAtual($pagAtual)
    {
        $this->pagAtual = $pagAtual;

        return $this;
    }

    /**
     * Get the value of aberto
     */ 
    public function getAberto()
    {
        return $this->aberto;
    }

    /**
     * Set the value of aberto
     *
     * @return  self
     */ 
    public function setAberto($aberto)
    {
        $this->aberto = $aberto;

        return $this;
    }

    /**
     * Get the value of leitor
     */ 
    public function getLeitor()
    {
        return $this->leitor;
    }

    /**
     * Set the value of leitor
     *
     * @return  self
     */ 
    public function setLeitor($leitor)
    {
        $this->leitor = $leitor;

        return $this;
    }
}


