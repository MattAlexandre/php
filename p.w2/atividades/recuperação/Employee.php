<?php


require_once 'process.php';

class Employee 
{
    private $Name;
    private $Surname;
    private $MonthlySalary;

    public function __construct($Name,$Surname,$MonthlySalary)
    {
        $this->setName($Name);
        $this->setSurname($Surname);
        $this->setMonthlySalary($MonthlySalary);
    }

    //name
    public function setName($Name)
    {
        return $this->Name = $Name;
    }

    public function getName()
    {
        return $this->Name;
    }

    //suename
    public function setSurname($Surname)
    {
        return $this->Surname = $Surname;
    }

    public function getSurname()
    {
        return $this->Surname;
    }

    //salario
    public function setMonthlySalary($MonthlySalary)
    {
        if ($this->getMonthlySalary() < 0) {
            $this->MonthlySalary = 0.0; 
        }
        else{
            $this->MonthlySalary = $MonthlySalary;
        } 
    }

    public function getMonthlySalary()
    {
        return $this->MonthlySalary;
    }


    //addsal
    public function raiseSalary()
    {
        $this->setMonthlySalary($this->getMonthlySalary() * 1.1);
    }

    ///salAnual
    public function anualSalary()
    {
        return $this->getMonthlySalary() * 12;
    }

    public function toString()
    {
    return 
           "<a> 
           <br>Name: ".$this->getName().
           "<br>Sobrenome: ".$this->getSurName().
           "<br>Salário Com Aumento:".$this->getMonthlySalary().
           "<br>Salário Anual:" . $this->anualSalary().
           "<br></a>";

    }

}