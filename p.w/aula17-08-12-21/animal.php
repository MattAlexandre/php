<?php

class Animal 
{
    
    public $nome_animal;
    public $peso;
    public $raca
    public $nascimento;

    
    public function  __construct()
    {

    }

    //nome_animal
    public function setName($nome_animal)
    {
        return $this->nome_animal = $nome_animal
    }

    Public function getName()
    {
        return $this->nome_animal
    }

    
    //peso
    public function setPeso($peso)
    {
        return $this->peso = $peso
    }

    Public function getPeso()
    {
        return $this->peso
    }

    
    //raca
    public function setRaca($raca)
    {
        return $this-> raca = $raca
    }

    Public function getRaca()
    {
        return $this->Raca
    }

    
    //nascimento
    public function setNascimento($nome_animal)
    {
        return $this-> Nascimento->$nascimento
    }

    Public function getNascimento()
    {
        return $this->nascimento
    }


    public function getIdade()
    {
        $nascimentoDateTime = new DateTime($nascimento);
        $DataAtual = new DateTime(); 
        $intervalo = $nascimentoDateTime->diff($DataAtual);
    
        
        return $intervalo;
    }
    

}