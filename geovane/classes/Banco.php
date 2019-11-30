<?php


class Banco
{
public  $nomeTitular;
private $agencia;
private $nConta;
private $saldo;

function __construct($nomeTitular)
    {
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;
        $this->agencia =$this->agencia;
        $this->nConta= $this->nConta;
    }
    public function getNomeTitular()
    {
        return $this->nomeTitular;
    }


    public function setNomeTitular($nomeTitular)
    {
        $this->nomeTitular = $nomeTitular;
    }


    public function getAgencia()
    {
        return $this->agencia;
    }


    public function setAgencia($agencia)
    {
        $this->agencia = $agencia;
    }


    public function getNConta()
    {
        return $this->nConta;
    }


    public function setNConta($nConta)
    {
        $this->nConta = $nConta;
    }


    public function getSaldo()
    {
        return $this->saldo;
    }


    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }


}
