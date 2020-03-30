<?php
require_once "Pessoa.php";

class Aluno extends Pessoa
{
    private $mat;
    private $curso;

    public function cancelarMatr(){
        echo "<p>Matrícula será cancelada</p>";
    }
    

    /**
     * Get the value of mat
     */ 
    public function getMat()
    {
        return $this->mat;
    }

    /**
     * Set the value of mat
     *
     * @return  self
     */ 
    public function setMat($mat)
    {
        $this->mat = $mat;

        return $this;
    }

    /**
     * Get the value of curso
     */ 
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set the value of curso
     *
     * @return  self
     */ 
    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }
}
