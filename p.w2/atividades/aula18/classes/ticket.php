<?php


class Ticket
{
    private $Name;
    private $Birth;
    private $Ticket;
    private $Value;

    //name
    public function setName($Name)
    {
        $this->Name = $Name;
    }

    public function getName()
    {
        return $this->Name;
    }

    //nascimento
    public function setBirth($Birth)
    {
        $this->Birth = $Birth;
    }

    public function getBirth()
    {
        return $this->Birth;
    }

      //ingresso
      public function setTicket($Ticket)
      {
          $this->Ticket = $Ticket;
      }
  
      public function getTicket()
      {
          return $this->Ticket;
      }
  

    //valor
    public function setValue($Value)
    {
        $this->Value = $Value;
    }

    public function getValue()
    {
        return $this->Value;
    }

    //toString
    public function ToString()
    {
        return

             '<h1>compra ingresso =}<h1> <br><a> 
              nome: '.$this->getName().'<br>
              nascimento: '.$this->getBirth().'<br>
              ingresso: '.$this->getTicket().'<br>
              valor normal: '.$this->getValue().'<br>
             </a>';
    }

}