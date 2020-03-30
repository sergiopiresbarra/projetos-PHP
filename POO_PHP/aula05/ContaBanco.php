<?php

class ContaBanco
{   //ATRIBUTOS
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    //METODOS ESPECIAIS
    public function __construct()
    {
        $this->saldo =0;
        $this->status =false;
        echo "<p>Conta criada com sucesso!</p>";
    }
    public function setNumConta($n)
    {
        $this->numConta = $n;
    }
    public function getNumConta()
    {
        return $this->numConta;
    }
    public function setTipo($t)
    {
        $this->tipo = $t;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function setDono($d)
    {
        $this->dono = $d;
    }
    public function getDono()
    {
        return $this->dono;
    }
    public function setSaldo($s)
    {
        $this->saldo = $s;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
    public function setStatus($st)
    {
        $this->status = $st;
    }
    public function getStatus()
    {
        return $this->status;
    }
    //Métodos
    public function abrirConta($t)
    {
       $this->setTipo($t);
       $this->setStatus(true);
       if($t == "CC"){
           $this->saldo = 50;
       }elseif($t == "CP") {
           $this->saldo = 150;
       }else{
           echo "<p>Erro!: Tipo de conta invalido!</p>";
       }

    }
    public function fecharConta()
    {
        if($this->saldo > 0){
            echo "<p>Conta com Dinheiro!</p>";
        }elseif ($this->saldo < 0) {
            echo "<p>Conta em Débito</p>";
        }else {
            $this->setStatus(false);
            echo "<p>Conta de {$this->getDono()} fechada com sucesso.</p>";
        }
    }
    public function depositar($v)
    {
       if ($this->getStatus()) {
            $this->saldo+=$v;
            echo "<p>Deposito de R$ $v na conta de {$this->getDono()} .</p>";
       }else {
           echo "<p>Erro: Impossível depositar, verifique o status da conta</p>";
       }
    }
    public function sacar($v)
    {
        if ($this->status) {
            if ($this->saldo >= $v) {
                $this->setSaldo($this->getSaldo() - $v);
                echo"<p>Saque de {$v} autorizado na conta de {$this->getDono()}</p>";
            }else {
                echo "<p>Saldo Insuficiente!</p>";
            }
        }
        else{
           echo "<p>Impossível Sacar, verifique o status da conta</p>"; 
        }
    }
    public function pagarMensal()
    {
       $v = 0;  
       if ($this->tipo == "CC") {
           $v = 12;
       }elseif($this->tipo == "CP"){
           $v = 20;
       }else{
           echo "<p>Erro:tipo conta invalido!</p>";
       }

       if($this->status){
            if($this->saldo > $v){
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Mensalidade de R$ $v debitada na conta de {$this->getDono()}.</p>";
            }
            else{
                echo "<p>Saldo Insuficiente</p>";
            }
       }
       else{
           echo "<p>Erro: Impossivel pagar, verifique o status da conta</p>";
       }
    }

}



